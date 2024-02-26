<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\feedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\News;
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

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['guest'])->group(function () {
    // guest routes here

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login_handle');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register_handle');
});


Route::middleware(['auth'])->group(function () {
    // auth routes here
    Route::get('/dashboard', [DashboardController::class, "index"]);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('', [UserController::class, 'submit_interests'])->name('submit_user_interests');


    Route::get('/profile', function () {
        return view('pages.Profile');
    });

   Route::post('/feed/create', [feedController::class, "store"])->name('create_feed');
   Route::post('/feed/delete/{id}', [feedController::class, "destroy"])->name('delete_feed');

    Route::get('/favorite', [FavoriteController::class, 'index']);

    Route::get('/manage-roles', [RoleController::class, 'index'])->name('manage_roles');
    Route::post('/create_role', [RoleController::class, 'create_role'])->name('create_role');
    Route::delete('/destroy_role', [RoleController::class, 'destroy_role'])->name('destroy_role');

});


Route::get('/about', function () {
    return view('pages.about');
});

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


Route::get('/news/{news_id}', [NewsController::class, 'index']);

Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::post('/user/updateRole', [UserController::class, 'updateRole'])->name('user.updateRole');


