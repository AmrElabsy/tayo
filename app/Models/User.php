<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
		"image",
		"role",

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	public function uploadImage( $image ) {
		$path = 'uploads/users';

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


}
