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
}
