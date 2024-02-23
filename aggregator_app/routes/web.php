<?php


use App\Http\Controllers\feedController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::middleware(['guest'])->group(function () {
    // guest routes here

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login_handle');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register_handle');
});


Route::middleware(['auth'])->group(function () {
    // auth routes here

    Route::post('', [UserController::class, 'submit_interests'])->name('submit_user_interests');

    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    });

    Route::get('/category', function () {
        return view('pages.category');
    });


    Route::get('/profile', function () {
        return view('pages.Profile');
    });

   Route::post('/feed/create', [feedController::class, "store"])->name('create_feed');

});


Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/x', function () {
    $cat = \App\Models\Category::all();
    return view('x', ['categories' => $cat]);
});
