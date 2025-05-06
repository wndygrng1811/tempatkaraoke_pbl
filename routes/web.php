<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard2Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Dashboard2Controller::class, 'index'])->name('dashboard');