<?php

use App\Http\Controllers\Authentification;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Register*/
Route::get('register',[Authentification::class,'showRegister'])->name('form_register');
/*Login*/
Route::get('login',[Authentification::class,'showLogin'])->name('form_login');
