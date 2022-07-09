<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use App\Models\TayoClass;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class TayoClassController extends Controller
{
    public function index()
    {
		$classes = TayoClass::all();
		$admins = Admin::all();
        return view("classes.index", compact("classes", "admins"));
    }

    public function store(Request $request)
    {
		$request->validate($this->getRules());

		$class = TayoClass::create([
			"name" => $request->name,
			"description" => $request->description
		]);

		if ($request->has("image")) {
			$class->uploadImage($request->file("image"));
		}

		$class->save();
		$class->admins()->attach($request->admin);
		return redirect(route("class.index"))->with("success", "Class created successfully");
    }

    public function show($tayoClass)
    {
		$tayoClass = TayoClass::find($tayoClass);
		do {
			$identity = rand(1000000, 9999999);
		} while (Student::where("identity", $identity)->exists());

		return view("classes.show", compact("tayoClass", "identity"));
    }

    public function update(Request $request, int $tayoClassId)
    {
		$tayoClass = TayoClass::find($tayoClassId);
        $request->validate($this->getRules());

		$tayoClass->update([
			"name" => $request->name,
			"description" => $request->description
		]);

		if ($request->has("image")) {
			$tayoClass->uploadImage($request->file("image"));
		}

		$tayoClass->save();
		TayoClass::find($tayoClassId)->admins()->sync($request->admin);
		return redirect(route("class.index"))->with("success", "Class updated successfully");
    }

    public function destroy(TayoClass $tayoClass) {
		$tayoClass->delete();
		return redirect(route("class.index"))->with("success", "Class deleted successfully");
    }

	private function getRules() {
		return [
			"name" => "required|min:2",
			"description" => "required|min:2"
		];
	}
}
