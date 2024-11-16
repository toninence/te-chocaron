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

