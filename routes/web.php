<?php

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

Route::get('/', [App\Http\Controllers\TopController::class, 'index'])->name('top');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login.index');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/login_auth', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.auth');
