<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function home(Request $req)
    {
        return view('home.home');
    }

}
