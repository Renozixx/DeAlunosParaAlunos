<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Application;
use Inertia\Inertia;

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

Route::post('/logout', [AuthController::class, "logout"])->name("logout");

Route::group(['middleware' => 'auth'], function() {
    // Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/', function () {
        return Inertia::render('Home');
    })->name('home');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/user/{id}', 'HomeController@UserSearch')->name('user.search');
});

/**
 * Rotass para componentes React
 */

// use App\Http\Controllers\ProfileController;
// use Illuminate\Foundation\Application;
// use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
