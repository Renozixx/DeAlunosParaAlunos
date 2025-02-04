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

        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'c_password' => 'required'
        ],
        [
            'required' => 'O campo :attribute é obrigatório',
            'email.email' => 'email deve ser um email válido',
            'unique' => ':attribute já está em uso'
        ]
        );
        
        if($password === $cPassword){
            if(User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password)])){
                return redirect()->route('home');
            } else {
                return redirect()->route('login');
            }
        }
    }

    public function login(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'required' => 'O campo :attribute é obrigatório',
            'email.email' => 'O campo email deve ser um email válido',
        ]
        );

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
