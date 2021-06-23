<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\Models\Customer;
class LoginController extends Controller
{
    
    public function login(){
        return view('auth.login');
    }
    public function verify(UserRequest $req){

        
        $status = Customer::where('email',$req->email)
            ->where('password',$req->password)
            ->first();
        if($status)
        {
            $req->session()->put('email', $req->email);
            return redirect("/home");
        }else{
            
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
            //return view('login.index');
        }
     }

}
