<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	use HasFactory;

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function products() {
		return $this->belongsToMany(Product::class);
	}

	public function categories() {
		return $this->belongsToMany(Category::class)->withPivot(["created_at"]);
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

	public function tayoClass() {
		return $this->belongsTo(TayoClass::class);
	}

	public function done_in_current_time($category_id) {
		$result = \DB::table("category_student")
			->where("student_id", "=", $this->id)
			->where("category_id", "=", $category_id)
			->latest()->first();

		if( $result ) {
			$date = $result->created_at;
			$category_week = date("oW", strtotime( $date ) );
			$current_week = date("oW");
			$category_time = \App\Models\Category::find($category_id)->time;

			if($current_week - $category_week < $category_time) {
				return true;
			}
		}
		return false;
	}

	public function done_in_past_time($category_id) {
		$result = \DB::table("category_student")
			->where("student_id", "=", $this->id)
			->where("category_id", "=", $category_id)
			->get();

		if( $result ) {
			foreach ($result as $category) {
				$date = $category->created_at;
				$category_week = date("oW", strtotime( $date ) );
				$current_week = date("oW");
				$category_time = \App\Models\Category::find($category_id)->time;

				if($current_week - $category_week >= $category_time) {
					return true;
				}
			}
		}
		return false;
	}

	public function getScoreAttribute() {
		$score = 0;
		foreach ($this->categories as $category) {
			if($this->done_in_past_time($category->id)) {
				$score += $category->points;
			}
		}

		foreach ($this->products as $product) {
			$score -= $product->price;
		}

		return $score;

	}

}
