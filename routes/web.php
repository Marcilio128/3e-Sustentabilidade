<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get( '/welcome', [\App\Http\Controllers\routeController::class, 'principal']);*/

Route::get('/Quiz3E', [\App\Http\Controllers\routeController::class, 'principal']);

Route::get('/Question', function () {
    return view('question');
});

Route::get('/Score', function () {
    return view('score');
});

Route::get('/Sobre', function () {
    return view('about');
});

Route::get('/Lose', function () {
    return view('lose');
});

Route::get('/TryAgain', function () {
    return view('UcanMore');
});

Route::get('/Win', function () {
    return view('win');
});
Route::fallback(function(){
    return view('NotFound');
});