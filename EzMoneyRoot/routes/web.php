<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class,'index'])->name('app.index');

Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class , 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/register', [LoginController::class, 'create'])->name('login.create');