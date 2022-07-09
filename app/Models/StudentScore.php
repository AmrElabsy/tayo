<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentScore extends Model
{
    use HasFactory;
	protected $table = "category_student";

	public function category() {
		return $this->belongsTo(Category::class);
	}

	public function student() {
		return $this->belongsTo(Student::class);
	}

}
