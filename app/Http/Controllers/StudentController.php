<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class StudentController extends Controller
{
    public function index()
    {
		$students = Student::all();
		return view('students.index', compact('students'));

    }

    public function store(Request $request)
    {
        $request->validate($this->getRules());

		$user = new User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->role = 'student';
		if ($request->hasFile('image')) {
			$user->uploadImage($request->file('image'));
		}
		$user->save();

		$student = new Student();
		$student->user_id = $user->id;
		$student->father_name = $request->father_name;
		$student->mother_name = $request->mother_name;
		$student->identity = $request->identity;
		$student->phone = $request->phone;
		$student->address = $request->address;
		$student->tayo_class_id = $request->class;
		$student->save();

		return redirect()->route('class.show', $student->tayo_class_id)->with('success', 'Student added successfully');
    }

    public function show(Student $student)
    {
		return view('students.show', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $this->validate($request, $this->getRules());

		$student->user->name = $request->name;
		$student->user->email = $request->email;
		$student->user->save();

		$student->father_name = $request->father_name;
		$student->mother_name = $request->mother_name;
		$student->identity = $request->identity;
		$student->phone = $request->phone;
		$student->address = $request->address;
		$student->tayo_class_id = $request->class;
		if ($request->file('image')) {
			$student->user->uploadImage($request->file('image'));
		}
		$student->save();

		return redirect()->route('class.show', $student->tayo_class_id)->with('success', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
		$student->delete();
		return redirect()->route('class.show', $student->tayo_class_id)->with('success', 'Student deleted successfully');
    }

	private function getRules() {
		return [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6',
			'father_name' => 'required|string|max:255',
			'mother_name' => 'required|string|max:255',
			'identity' => 'required|string|max:255',
			'phone' => 'required|string|max:255',
			'address' => 'required|string|max:255',
			'class' => 'required|integer',
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		];
	}
}
