<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SallController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomController;
use Illuminate\Support\Facades\Route;


Route::get('/',[WelcomController::class, 'welcome'])->name('welcome');
Route::get('/user',[UserController::class, 'user'])->name('user');
Route::get('/validation',[ReservationController::class, 'validation'])->name('validation');

Route::get('/sall',[SallController::class, 'sall'])->name('sall');
Route::post('/sall', [SallController::class, 'create'])->name('sall');
Route::delete('/sall/{id}', [SallController::class, 'delete'])->name('sall.delete');

