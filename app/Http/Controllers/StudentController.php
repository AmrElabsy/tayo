<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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
		/*
		$categories = $student->categories;
		$firstWeek = $categories[0]->pivot->created_at->year . $categories[0]->pivot->created_at->week;
		$current_week = date("oW");

		$firstWeek = 202201;
		$firstWeek = $categories[0]->pivot->created_at->week;
		echo date('M d',strtotime($firstWeek));
		dd($firstWeek, $current_week);
		*/

		$weeks = [];
		$day = date('M d',strtotime("1 1 2022"));
		while (time() > strtotime($day)) {
			$weeks[] = $day;
			$day = date("M d", strtotime($day . " + 7 days"));

		}
//		echo date("M d", strtotime($firstDay . " + 7 days"));

		dd($weeks);


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

	public function score(Request $request) {
		$added = json_decode($request->added);
		$removed = json_decode($request->removed);

		foreach ($added as $studentId => $scores) {
			foreach ($scores as $score) {
				DB::table("category_student")
					->insert([
						"category_id" => $score,
						"student_id" => $studentId,
						"created_at" => now()
					]);
			}
		}

		foreach ($removed as $studentId => $scores) {
			foreach ($scores as $score) {
				DB::table("category_student")
					->where("student_id", "=", $studentId)
					->where("category_id", "=", $score)
					->orderBy("id", "desc")->limit(1)->delete();
			}
		}

		return Redirect::back();
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
