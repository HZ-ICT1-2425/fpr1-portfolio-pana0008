<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticContentController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function profile()
    {
        return view('profile');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function faq()
    {
        return view('faq');
    }

    public function blog()
    {
        return view('blog');
    }
}
