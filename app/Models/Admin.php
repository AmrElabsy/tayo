<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Utils;

class Admin extends Model
{
    use HasFactory;

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function admins() {
		return $this->hasMany(Admin::class);
	}

	public function students() {
		return $this->hasMany(Student::class);
	}

	public function getNameAttribute() {
		return $this->user->name;
	}

	public function getEmailAttribute() {
		return $this->user->email;
	}

	public function getImageAttribute() {
		return $this->user->image;
	}

	public function tayoClasses() {
		return $this->belongsToMany(TayoClass::class, "admin_tayo_class");
	}

}
