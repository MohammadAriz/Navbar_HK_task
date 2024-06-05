<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home()
    {
        return view('test.home');
    }
    public function about()
    {
        return view('test.about');
    }
    public function contact()
    {
        return view('test.contact');
    }
}
