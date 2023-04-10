<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeDo;
use App\Http\Controllers\UserDo;
use App\Http\Controllers\PHPMailerController;
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
Route::GET('/booking', [HomeDo::class, 'booking']);
Route::GET('/technicians', [HomeDo::class, 'technicians']);
Route::GET('/testimonial', [HomeDo::class, 'testimonial']);
Route::GET('/account', [HomeDo::class, 'account']);
Route::GET('/inputotp', [HomeDo::class, 'inputotp']);

Route::GET('/regist', [UserDo::class, 'regist']);
Route::GET('/login', [UserDo::class, 'login']);
Route::GET('/checking', [UserDo::class, 'checking']);
Route::GET("email", [PHPMailerController::class, "email"])->name("email");

Route::POST('/regist', [UserDo::class, 'signup']);
Route::POST('/login', [UserDo::class, 'signin']);
Route::POST('/logout', [UserDo::class, 'signout']);
Route::POST("send-email", [PHPMailerController::class, "composeEmail"])->name("send-email");


