<?php

use App\Http\Controllers\WelcomController;
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
