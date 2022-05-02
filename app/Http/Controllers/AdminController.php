<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\TayoClass;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
		$admins = Admin::all();
		return view("users.admins", compact("admins"));
    }

    public function store(Request $request)
    {
		$this->validate($request, $this->getRules());

		$user = new User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->role = "admin";
		if ($request->hasFile('image')) {
			$user->uploadImage($request->file('image'));
		}
		$user->save();


		$admin = new Admin();
		$admin->user_id = $user->id;
		$admin->type = 0;
		$admin->save();

		return redirect()->back()->with("success", "Admin created successfully");
    }

    public function update(Request $request, Admin $admin)
    {
		$this->validate($request, $this->getRules($admin->id));

		$admin->user->name = $request->name;
		$admin->user->email = $request->email;
		if ($request->hasFile('image')) {
			$admin->user->uploadImage($request->file('image'));
		}
		$admin->user->save();

		return redirect()->back()->with("success", "Admin updated successfully");
    }

    public function destroy(Admin $admin)
    {
		$admin->user->delete();
		$admin->delete();

		return redirect()->back()->with("success", "Admin deleted successfully");
    }

	private function getRules($id = null) {
		return [
			'name' => 'required|max:255',
			'email' => 'required|email' . ($id ? "" : "|unique:users,email,$id" ),
			'password' => ( $id ? "" : 'required|min:6'),
			"image" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
		];
	}
}
