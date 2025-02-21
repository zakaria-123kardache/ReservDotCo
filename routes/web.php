<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SallController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvwelider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[WelcomController::class, 'welcome'])->name('welcome');
Route::get('/sall',[SallController::class, 'sall'])->name('sall');
Route::get('/user',[UserController::class, 'user'])->name('user');
Route::get('/validation',[ReservationController::class, 'validation'])->name('validation');

