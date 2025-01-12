<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//About page
Route::get('/about', function () {
//    return ['Foo' => 'Bar']; //you can return array
    return view('about');
});

//Contact page
Route::get('/contact', function () {
//    return ['Foo' => 'Bar']; //you can return array
    return view('contact');
});
