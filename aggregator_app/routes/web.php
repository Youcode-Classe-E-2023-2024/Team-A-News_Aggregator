<?php

use App\Http\Controllers\Authentification;
use App\Http\Controllers\CategoryController;
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
    return view('pages.home');
});


Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/category', function () {
    return view('pages.category');
});


Route::get('/profile', function(){
    return view('pages.Profile');
});

Route::get('/about', function(){
    return view('pages.about');
});

/*Register*/
Route::get('register',[Authentification::class,'showRegister'])->name('form_register');
/*Login*/
Route::get('login',[Authentification::class,'showLogin'])->name('form_login');
/*detailed*/
Route::get('home/detailed',[Authentification::class,'detailed'])->name('form_detailed');

Route::get('/category', [CategoryController::class, 'index']);

Route::resource('categories', CategoryController::class)->names([
    'index' => 'categories.index',
    'create' => 'categories.create',
    'store' => 'categories.store',
    'show' => 'categories.show',
    'edit' => 'categories.edit',
    'update' => 'categories.update',
    'destroy' => 'categories.destroy',
]);

Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
