<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List user API
Route::get('/user', [UserController::class, 'getUser']);

// Add User API
Route::post('/addUser', [UserController::class, 'addUser']);

// Update User API
Route::get('/updateUser/{id}', [UserController::class, 'updateUser']);

// Delete User API
Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser']);