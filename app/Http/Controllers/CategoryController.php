<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
		$this->validate($request, $this->getRules());

		$category = new Category();
		$category->name = $request->name;
		$category->points = $request->points;
		$category->time = $request->time;
		$category->tayo_class_id = $request->tayo_class_id;

		$category->save();

		return redirect()->back()->with('success', 'Category has been created.');
    }

    public function update(Request $request, Category $category)
    {
		$this->validate($request, $this->getRules());

		$category->name = $request->name;
		$category->points = $request->points;
		$category->time = $request->time;

		$category->save();

		return redirect()->back()->with('success', 'Category has been updated.');
    }

    public function destroy(Category $category)
    {
		$category->delete();

		return redirect()->back()->with('success', 'Category has been deleted.');
    }

	private function getRules() {
		return [
			'name' => 'required|max:255',
			"points" => "required|numeric|min:0",
			"time" => "required|numeric|min:0",
		];
	}
}
