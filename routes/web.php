<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('login', function () {return view('login');});
Route::get('registration', [App\Http\Controllers\AuthController::class, 'showRegistration'])->name('registration');
Route::post('registration/submit', [App\Http\Controllers\AuthController::class, 'submitRegistration'])->name('register.submit');
Route::get('login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('login/submit', [App\Http\Controllers\AuthController::class, 'submitLogin'])->name('login.submit');
Route::get('forgot-password', function () {return view('forgotpw.index');});

Route::resource('book', App\Http\Controllers\BookController::class);
// Route::get('book/detail', [App\Http\Controllers\BookController::class, 'detail']);