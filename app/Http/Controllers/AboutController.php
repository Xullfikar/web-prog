<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        return "<h1>About Page!</h1>";
    }
}
