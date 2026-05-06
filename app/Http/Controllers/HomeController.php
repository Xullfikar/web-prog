<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
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
        return view('home', compact('students'));
    }
}
