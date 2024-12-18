<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [AuthController::class, 'v_register'])->name('register');
Route::get('/login', [AuthController::class, 'v_login'])->name('login');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [HistoryController::class, 'index'])->middleware('auth');

