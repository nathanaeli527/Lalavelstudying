<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petsonController extends Controller
{
  
    public function index()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactus()
    {
        return view('contactus');
    }
}
