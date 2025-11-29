<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/expertise', function () {
    return view('expertise');
});

Route::get('/engagement', function () {
    return view('engagement');
});

Route::get('/contact', function () {
    return view('contact');
});
