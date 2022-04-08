<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\TayoClass;
use Illuminate\Http\Request;

class TayoClassController extends Controller
{
    public function index()
    {
		$classes = TayoClass::all();
        return view("classes.index", compact("classes"));
    }

    public function store(Request $request)
    {
		$request->validate($this->getRules());
        // dd($request);

		$class = TayoClass::create([
			"name" => $request->name,
			"description" => $request->description
		]);

		return redirect(route("class.index"));
    }

    public function show($tayoClass)
    {
		$tayoClass = TayoClass::find($tayoClass);
		do {
			$identity = rand(1000000, 9999999);
		} while (Student::where("identity", $identity)->exists());

//		dd($tayoClass->id);
		return view("classes.show", compact("tayoClass", "identity"));

    }

    public function edit(TayoClass $tayoClass)
    {

    }

    public function update(Request $request, TayoClass $tayoClass)
    {
        $request->validate($this->getRules());

		$tayoClass->update([
			"name" => $request->name,
			"description" => $request->description
		]);

		return redirect(route("class.index"));
    }

    public function destroy(TayoClass $tayoClass)
    {
		$tayoClass->delete();
		return redirect(route("class.index"));
    }

	private function getRules() {
		return [
			"name" => "required|min:2",
			"description" => "required|min:2"
		];
	}
}
