<?php

namespace App\Http\Controllers;

use App\Models\TayoClass;
use Illuminate\Http\Request;

class ClassScoreController extends Controller
{
    public function index()
    {
        $classes = TayoClass::all();

		return view('class_score.index', compact('classes'));
    }

    public function show($id)
    {
		$class = TayoClass::find($id);

		return view('class_score.show', compact('class'));
    }


    public function update(Request $request, $id)
    {

    }

}
