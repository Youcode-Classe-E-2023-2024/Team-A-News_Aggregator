<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\feedController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\UserController;
use App\Models\News;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Newsdash;
use App\Http\Controllers\EmailsController;

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
    Route::get('/dashboard', [DashboardController::class, "index"])->can('view-dashboard');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('', [UserController::class, 'submit_interests'])->name('submit_user_interests');


    Route::get('/profile', function () {
        return view('pages.Profile');
    });
    Route::delete('/profile', [UserController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile', [UserController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/update', [UserController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [UserController::class, 'update'])->name('profile.update');
   Route::post('/feed/create', [feedController::class, "store"])->name('create_feed')->can('feed-create');
   Route::post('/feed/delete/{id}', [feedController::class, "destroy"])->name('delete_feed')->can('feed-delete');

    Route::get('/favorite', [FavoriteController::class, 'index'])->can('favorite-list');

    Route::get('/manage-roles', [RoleController::class, 'index'])->name('manage_roles')->can('role-list');
    Route::post('/create_role', [RoleController::class, 'create_role'])->name('create_role')->can('role-create');
    Route::delete('/destroy_role', [RoleController::class, 'destroy_role'])->name('destroy_role')->can('role-delete');
    Route::put('/update_user_role/{user_id}', [UserController::class, 'update_user_role'])->can('update-user-role');

    Route::delete('/delete_user/{user_id}', [UserController::class, 'destroy'])->can('delete-user');

    Route::put('/update_role', [RoleController::class, 'update_role'])->can('role-edit');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/category', [CategoryController::class, 'index'])->can('category-list');

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

Route::post('/comments/addComment', [CommentController::class, 'store'])->name('addComment');
Route::get('/comments/{news_id}', [CommentController::class, 'show'])->name('comments.show');


Route::get('/news/{slug}', [NewsController::class, 'index'])->name('news.show');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::post('/user/updateRole', [UserController::class, 'updateRole'])->name('user.updateRole');
Route::get('/news', [Newsdash::class, 'index'])->can('news-list');
Route::delete('/news/{id}', [Newsdash::class, 'destroy'])->name('news.destroy')->can('news-delete');
Route::get('/emails', [EmailsController::class, 'index']);

Route::get('/trending', [TrendingController::class, 'index']);
