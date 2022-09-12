<?php

use App\Http\Controllers\RankController;
use Illuminate\Support\Facades\Route;

//navegação

Route::get('/', [RankController::class, 'index']);
Route::get('/Quiz3E', [RankController::class, 'quiz']);
Route::post('/save', [RankController::class, 'usr']);
Route::get('/question', [RankController::class, 'question']);

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