<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authentification extends Controller
{
    public function showRegister(){
        return view('pages.register');
    }

    public function showLogin(){
        return view('pages.login');
    }

    public function detailed(){
        return view('pages.detailed');
    }
}
