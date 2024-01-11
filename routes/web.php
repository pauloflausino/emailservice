<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Mails\AuthMailController;



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

Route::get('/', function () {
    return view('login'); //welcome
});

Route::resource('users', UserController::class);
Route::resource('login', LoginController::class);
Route::resource('home', HomeController::class);
Route::post('/send-email', [EmailController::class, 'sendEmail']);

Route::get('/enviar-email', [AuthMailController::class, 'sendRegisterMail']);