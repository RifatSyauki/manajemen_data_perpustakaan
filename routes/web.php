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
// Route::get('book', App\Http\Controllers\BookController::class);
// Route::post('book/create', [App\Http\Controllers\BookController::class, 'store'])->name('book.create');
// Route::get('book/edit', [App\Http\Controllers\BookController::class, 'edit'])->name('book.edit');
// Route::put('book/update', [App\Http\Controllers\BookController::class, 'update'])->name('book.update');
// Route::get('book/dashboard', [App\Http\Controllers\BookController::class, 'dashboard'])->name('book.dashboard');
// Route::get('book/dashboard', [App\Http\Controllers\BookController::class, 'dashboard'])->name('book.dashboard');
Route::get('book/detail', [App\Http\Controllers\BookController::class, 'detail'])->name('book.detail');