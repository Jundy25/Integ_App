<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;


Route::get('/home', HomepageController::class)->middleware('auth');

Route::get('/', [AuthController::class, 'index'])->name('login');

Route::post('/', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

