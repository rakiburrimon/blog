<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

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
