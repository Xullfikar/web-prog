<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request; 

class StudentController extends Controller
{
    public function detail(string $id)
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

    public function showCreate(){
        return view('students.create');
    }

    public function insertStudent(Request $request){
        $name = $request->input('student_name');
        $nim = $request->input('student_nim');

        $process = Students::create([
            'name' => $name,
            'nim' => $nim,
        ]);

        if($process){
            return redirect()->route('home');
        } else {
            return back()->withInput();
        }
    }
}
