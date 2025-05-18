<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('home'); // Homepage diakses dari domain utama
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/ourservice', function () {
    return view('ourservice');
});

Route::get('/contact', function () {
    return view('contact');
});


