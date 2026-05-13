<?php

namespace App\Http\Controllers;

use App\Models\Students;

class HomeController extends Controller
{
    public function index()
    {
        $students = Students::get();
        return view('home', compact('students'));
    }
}
