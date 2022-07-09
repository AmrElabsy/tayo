<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::group(["namespace" => "App\Http\Controllers", "middleware" => "auth"], function () {
	Route::get("", "HomeController@index")->name("home");
	Route::get("users", "HomeController@users")->name("home.users");
	Route::post("studentscore", "StudentController@score")->name("students.score");

	Route::resources([
		"admin" => "AdminController",
		"category" => "CategoryController",
		"class" => "TayoClassController",
		"post" => "PostController",
		"product" => "ProductController",
		"student" => "StudentController",
		"score" => "ClassScoreController",
		"competition" => "CompetitionController",
	]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
