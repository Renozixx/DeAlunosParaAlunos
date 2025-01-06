<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $name = $request->input("name");
        $email = $request->input("email");
        // $password = Hash::make($request->input("password"));
        $password = $request->input("password");
        
        if(User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password)])){
            return redirect()->route('login');
        } else {
            return redirect()->route('register');
        }
    }

    public function login(Request $request) {
        $email = $request->input("email");
        $password = $request->input("password");
        // dd($email, $password, User::where('email', $email)->first());
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {
            return view('auth.login', ['message' => 'Erro ao logar', "email" => $email, "pass" => $password]);
        }
    }

    public function logOut() {
        Auth::logout();
        return redirect()->route("login");
    }
}
