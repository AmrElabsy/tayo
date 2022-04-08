<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TayoClass extends Model
{
	protected $fillable = ["name", "description"];
    use HasFactory;

	public function students() {
		return $this->hasMany(Student::class);
	}
}
