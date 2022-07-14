<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thesepo
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts/index', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/posts/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/delete/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.delete');
Route::get('/posts/{id}/shows', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::get('/users/index', [App\Http\Controllers\UserController::class, 'index'])->name('users.list-user');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/comments', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'detail'])->name('users.detail');

Route::get('/comments/index', [App\Http\Controllers\CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/{id}/users', [App\Http\Controllers\CommentController::class, 'show'])->name('comments.infor-user');
// Route::resource('/posts', PostController::class);