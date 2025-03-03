<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');



Route::get('/Staff', function () {
    return view('staff_dashboard');
})->name('staff_home');
