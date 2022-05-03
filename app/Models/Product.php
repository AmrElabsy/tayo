<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Image as ImageModel;

class Product extends Model
{
	use HasFactory;

	public function images() {
		return $this->belongsToMany(ImageModel::class);
	}

//	public function image() {
//		return $this->images()->first();
//	}

	public function uploadImages( $images ) {
		$path = 'uploads/products/' . $this->id;

		foreach ( $images as $image ) {
			$name = time() . rand(0, 1000000) . '.' . $image->getClientOriginalExtension();
			if ( !Storage::exists($path) ) {
				Storage::disk('public')->makeDirectory($path);
			}

			$resize_image = Image::make($image->getRealPath());
			$resize_image->resize(400, 400, function ( $constrains ) {
				$constrains->aspectRatio();
			})->save(storage_path('app/public/' . $path . '/' . $name));

			$image = ImageModel::create([
				'path' => $path . "/" . $name,
			]);

			Product::find($this->id)->images()->attach($image);
		}
	}

}
