<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected function index(){
        return view('auth.login');
    }

    protected function registerForm(){
        return view('auth.register');
    }

    protected function login(Request $request){
        
    }

    protected function register(Request $request){
        
    }
}
