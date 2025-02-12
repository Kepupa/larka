<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'showLoginForm']);

Route::get('/register', [UserController::class, 'showRegisterForm']);

Route::post('/register', [UserController::class, 'register']);

Route::post('/login', [UserController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); // Добавляем имя маршрута для удобства
