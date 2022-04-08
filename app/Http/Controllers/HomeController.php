<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Post;
use App\Models\Student;
use App\Models\TayoClass;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$posts = Post::all();

//		dd($posts);

		// TODO: Testing Posts retrieving
        return view('home');
    }

	public function users() {
		$admins = Admin::all()->count();
		$classes = TayoClass::all()->count();


		return view("users.index", compact("admins", "classes"));
	}
}
