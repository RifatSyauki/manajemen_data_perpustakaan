<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('registration', [App\Http\Controllers\AuthController::class, 'showRegistration'])->name('registration');
Route::post('registration/submit', [App\Http\Controllers\AuthController::class, 'submitRegistration'])->name('register.submit');
Route::get('login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('login/submit', [App\Http\Controllers\AuthController::class, 'submitLogin'])->name('login.submit');
Route::get('forgot-password', function () {return view('forgotpw.index');});
Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'is_admin'])->name('admin.')->group(function () {
    Route::resource('admin', App\Http\Controllers\AdminBookController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('books', App\Http\Controllers\BookController::class);
});