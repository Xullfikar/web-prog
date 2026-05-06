<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(string $id)
    {
        $students = [
            [
                'id' => 1,
                'name' => "ucup",
                'score' => [97,95,90]
            ],
            [
                'id' => 2,
                'name' => "endy",
                'score' => [100,100,100]
            ],
            [
                'id' => 3,
                'name' => "cok",
                'score' => [70,70,80]
            ],
        ];

        $student = collect($students)->firstWhere('id', $id);
        return view('students.detail', compact('student'));
    }
}
