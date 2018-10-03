<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

	public function index()
    {
        return view('student.index');
    }
        public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'batch_id' => 'required',
            'course' => 'required',
        ]);
        Student::create($request->all());
        return redirect()->route('student.index')
                        ->with('success','Student added successfully');
    }
    public function create(array $data)
    {
        return Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'contact' => $data['contact'],
            'result' => $data['result'],
            'batch_id' => $data['batch_id'],
            'course_id' => $data['course_id'],
        ]);
    }
}
