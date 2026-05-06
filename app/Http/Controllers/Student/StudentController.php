<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
