<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Quiz-3E', function () {
    return view('quiz');
});

Route::get('/Question', function () {
    return view('question');
});

Route::get('/Score', function () {
    return view('score');
});