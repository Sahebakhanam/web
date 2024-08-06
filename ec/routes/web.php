<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/faq-s', function () {
    return view('faq-s');
});

