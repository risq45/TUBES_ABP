<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeDo;
use App\Http\Controllers\UserDo;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::GET('/', [HomeDo::class, 'default']);
Route::GET('/about', [HomeDo::class, 'about']);
Route::GET('/contact', [HomeDo::class, 'contact']);
Route::GET('/service', [HomeDo::class, 'service']);
Route::GET('/availgarage', [HomeDo::class, 'availgarage']);

Route::GET('/regist', [UserDo::class, 'regist']);
Route::GET('/login', [UserDo::class, 'login']);

Route::POST('/regist', [UserDo::class, 'signup']);
Route::POST('/login', [UserDo::class, 'signin']);
Route::POST('/logout', [UserDo::class, 'signout']);


