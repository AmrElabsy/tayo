<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\TayoClass;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
		$admins = Admin::all();
		$classes = TayoClass::all();
        return view("users.admins", compact("admins", "classes"));
    }

    public function store(Request $request)
    {
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email|unique:admins',
			'password' => 'required|min:6',
		]);

		$admin = new Admin;
		$admin->name = $request->name;
		$admin->email = $request->email;
		$admin->password = bcrypt($request->password);
		$admin->save();

		return redirect()->back()->with("success", "Admin created successfully");
    }

    public function show(Admin $admin)
    {
		$classes = TayoClass::all();
		return view("users.admin", compact("admin", "classes"));
    }

    public function edit(Admin $admin)
    {
        //
    }

    public function update(Request $request, Admin $admin)
    {
        //
    }

    public function destroy(Admin $admin)
    {
        //
    }

	private function getRules() {
		return [
			'name' => 'required',
			'email' => 'required|email|unique:admins',
			'password' => 'required|min:6',
		];
	}
}
