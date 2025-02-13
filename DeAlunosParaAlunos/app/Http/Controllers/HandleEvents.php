<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HandleEvents extends Controller
{
    public function teste(){
        return Inertia::render('home', [
            'name' => 'Teste'
        ]);
    }
}
