<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create', [FormsController::class, 'create'])->name('form.create');
Route::post('/', [FormsController::class, 'store'])->name('store');

Route::get('/auth/redirect', [EmailController::class, 'redirectToGoogle'])->name('auth.redirect');
Route::get('/auth/callback', [EmailController::class, 'handleGoogleCallback'])->name('auth.callback');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
