<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users',UserController::class);

Route::get('/', [AppController::class,'index'])->name('app.index');

//Route::view('/main', 'app.main')->name('app.main');
Route::get('/main',[MainController::class, 'index'])->name('main.index')->middleware('auth');

Route::view('/login', 'login.form')->name('login');
Route::post('/auth', [LoginController::class , 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/register', [LoginController::class, 'create'])->name('login.create');


Route::view('/transactions', 'app/transactions')->name("transactions.view");
