<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class StaticContentController extends Controller
{
    /**
     * @return 'welcome' view
     */
    public function home()
    {
        return view('welcome');
    }

    /**
     * @return 'profile' view
     */
    public function profile()
    {
        return view('profile');
    }

    /**
     * @return 'dashboard' view
     */
    public function dashboard()
    {
        return view('dashboard');
    }
}
