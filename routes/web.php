<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/login_form', function () { return view('auth.login'); })->name('login_form');
Route::post('/login_execute', [LoginController::class, 'login_execute'])->name('login_execute');



Route::get('/home', function () {
    return view('my_layout.layout');
})->name('my_layout.layout');
