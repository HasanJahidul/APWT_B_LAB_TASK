<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $req){
        //M2F1
        $req->session()->flush();
        return redirect('/login');
    }
}
