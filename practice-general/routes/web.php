<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;

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

Route::get('/users/index', [App\Http\Controllers\UserController::class, 'index'])->name('users.list-user');

Route::get('get-user', [App\Http\Controllers\UserController::class, 'getuser']);
Route::post('/addUser', [App\Http\Controllers\UserController::class, 'addUser']);
Route::get('edit-user/{id}',[App\Http\Controllers\UserController::class, 'edit']);
Route::put('update-user/{id}',[App\Http\Controllers\UserController::class, 'update']);
Route::delete('delete-user/{id}',[App\Http\Controllers\UserController::class, 'deleteUser']);