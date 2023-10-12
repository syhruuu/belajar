<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function utama()
    {
        return view('welcome');
    }

    public function reg()
    {
        return view('reg');
    }

    public function yes()
    {
        return view('yes');
    }
}
