<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("index");
});

Route::get('/nama',function() {
    return "Nama saya adalah John";
});
Route::get('/welcome', function() {
    return view("welcome");
});
Route::get('/profile',function() {
    return view('profile');
});
