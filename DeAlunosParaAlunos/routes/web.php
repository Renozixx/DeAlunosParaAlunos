<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/login', function() {
    return view("auth.login");
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', function() {
    return view("auth.register");
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/privace', function(){
    return view('auth.politicaDePrivacidade');
});

Route::get('/logout', 'AuthController@logout')->name("logout");

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [HomeController::class, ''])->name('home');

    Route::get('/user/{id}', 'HomeController@UserSearch')->name('user.search');
});