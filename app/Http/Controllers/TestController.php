<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function login(): View
    {
        return view('login');
    }

    public function logout(): View
    {
        return view('logout');
    }

    public function about(): View
    {
        return view('about');
    }

    public function school(): View
    {
        return view('school');
    }

    public function language(): View
    {
        return view('language');
    }

    public function product($id):View
    {
        return view("test", compact('id'));
    }
}
