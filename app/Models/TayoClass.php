<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TayoClass extends Model
{
	protected $fillable = ["name", "description"];
    use HasFactory;

	public function students() {
		return $this->hasMany(Student::class);
	}

	public function admins() {
		return $this->belongsToMany(Admin::class, "admin_tayo_class");
	}

	public function getAdminAttribute() {
		return $this->admins[0] ?? null;
	}

	public function uploadImage( $image ) {
		$path = 'uploads/classes';

		$name = time() . '.' . $image->getClientOriginalExtension();
		if ( !Storage::exists($path) ) {
			Storage::disk('public')->makeDirectory($path);
		}

		$resize_image = Image::make($image->getRealPath());
		$resize_image->resize(400, 400, function ( $constrains ) {
			$constrains->aspectRatio();
		})->save(storage_path('app/public/' . $path . '/' . $name));

		$this->image = $path . "/" . $name;
	}

	public function getDayCreatedAttribute() {
		return $this->created_at->format('d');
	}

	public function getMonthCreatedAttribute() {
		return $this->created_at->format('M');
	}

	public function getYearCreatedAttribute() {
		return $this->created_at->format('Y');
	}

}
