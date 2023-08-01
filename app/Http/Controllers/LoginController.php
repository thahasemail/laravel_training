<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view("login");
    }

    public function doLogin(){

        if(auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ],true)){
            return redirect()->route("home");
        }
    
        else{
            return redirect()->route("login")->with("message","Login failed");

        }
    }
    public function logout(){
        auth()->logout();
        return redirect()->route("login");
    }
}
