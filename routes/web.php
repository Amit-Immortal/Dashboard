<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

Route::get('/', [LoginController::class, 'index']);
Route::get('/dashboard', [LoginController::class, 'dashboard']);


Route::post('/login', [LoginController::class, 'login_user']);
Route::get('/logout',[LoginController::class,'logout']);


Route::get('/users', [UserController::class, 'users']);
Route::post('/users', [UserController::class, 'add_st_details']);

Route::get('/edit_details/{id}',[UserController::class, 'edit_details']);
Route::post('/edit_st_details/{id}', [UserController::class, 'edit_st_details']);

Route::get('/delete_st_details/{id}', [UserController::class, 'delete_st_details']);
