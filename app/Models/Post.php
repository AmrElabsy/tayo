<?php

namespace App\Models;

use App\Models\Image as ImageModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Post extends Model
{
    use HasFactory;

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function images() {
		return $this->belongsToMany(ImageModel::class);
	}

	public function videos() {
		return $this->belongsToMany(Video::class);
	}

	public function getTimeDifferenceAttribute() {
		$date = new \DateTime($this->created_at);
		$now = new \DateTime();
		$diff = $now->diff($date);
		$diff->w = floor($diff->d / 7);
		$diff->d -= $diff->w * 7;
		$string = "";
		if ($diff->y > 0) {
			$string .= $diff->y . " year" . ($diff->y > 1 ? "s" : "") . " ago";
		} elseif ($diff->m > 0) {
			$string .= $diff->m . " month" . ($diff->m > 1 ? "s" : "") . " ago";
		} elseif ($diff->w > 0) {
			$string .= $diff->w . " week" . ($diff->w > 1 ? "s" : "") . " ago";
		} elseif ($diff->d > 0) {
			$string .= $diff->d . " day" . ($diff->d > 1 ? "s" : "") . " ago";
		} elseif ($diff->h > 0) {
			$string .= $diff->h . " hour" . ($diff->h > 1 ? "s" : "") . " ago";
		} elseif ($diff->i > 0) {
			$string .= $diff->i . " minute" . ($diff->i > 1 ? "s" : "") . " ago";
		} else {
			$string .= "just now";
		}
		return $string;
	}

	public function uploadImages( $images ) {
//		dd($images);
		$path = 'uploads/posts/images/' . $this->id;

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

			Post::find($this->id)->images()->attach($image);
		}
	}

	public function uploadVideos( $videos ) {
		$path = 'uploads/posts/videos/' . $this->id;

		foreach ( $videos as $video ) {
			$name = time() . rand(0, 1000000) . '.' . $video->getClientOriginalExtension();
			if ( !Storage::exists($path) ) {
				Storage::disk('public')->makeDirectory($path);
			}

			$video = Video::create([
				'path' => $video->storeAs($path, $name, 'public'),
			]);

			Post::find($this->id)->videos()->attach($video);
		}
	}

}
