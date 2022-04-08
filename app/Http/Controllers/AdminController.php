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
        dd($request);
    }

    public function show(Admin $admin)
    {
        //
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
}
