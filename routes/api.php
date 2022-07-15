<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [UserController::class, 'getUsers'])->name("users");
Route::get('/user/{id}', [UserController::class, 'getUser'])->name("user");
Route::post('/user/add', [UserController::class, 'addUser'])->name("user.add");
Route::post('/user/edit', [UserController::class, 'editUser'])->name("user.edit");

Route::get('/roles', [UserController::class, 'getRoles'])->name("roles");
