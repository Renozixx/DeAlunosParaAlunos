<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $cPassword = $request->c_password;
        
        if($password === $cPassword){
            if(User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password)])){
                return redirect()->route('home');
            } else {
                return redirect()->route('login');
            }
        }
    }

    public function login(Request $request) {
        $email = $request->email;
        $password = $request->password;
        // dd($email, $password, User::where('email', $email)->first());
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {
            return view('auth.login', ['message' => 'Erro ao logar']);
        }
    }

    public function logOut() {
        Auth::logout();
        return redirect()->route("login");
    }
}
