<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController; // Corrected namespace casing

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'home']);
Route::get('/', 'App\Http\Controllers\User\HomeController@index');
