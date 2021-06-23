<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;

class RegisterController extends Controller
{
    
    public function register()
    {
        return view('auth.register');
    }
    
        public function verify(RegistrationRequest $req){
            echo 'registration Complete';
        }
    public function insert(Request $req){
        if ($req-> password == $req-> confirm_password)
        {
            $status = Customer::where('email',$req->email)
            ->first();
        if($status)
        {
            $req->session()->flash('msg', 'User already Exist!');
            return redirect('/register');
        }else{

            $customer = new Customer;

        $customer->full_name = $req->full_name;
        $customer->user_name = $req->user_name;
        $customer->email = $req->email;
        $customer->password = $req->password;
        $customer->city = $req->city;
        $customer->country = $req->country;
        $customer->phone = $req->phone;
        $customer->company_name = $req->company;
        $customer->user_type = "active";
        $customer->save();

        return redirect('/login');

        }
        
        }else{
            
            $req->session()->flash('msg', 'Password and Confirm Passowrd Does Not match!');
            return redirect('/register');
            //return view('login.index');
        }
        
    }
}
