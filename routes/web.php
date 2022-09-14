<?php

use App\Http\Controllers\RankController;
use Illuminate\Support\Facades\Route;

//navegação

Route::get('/', [RankController::class, 'index']);
Route::get('/Quiz3E', [RankController::class, 'quiz']);
Route::post('/save', [RankController::class, 'usr']); /* salvar nome do formulário */
Route::get('/question', [RankController::class, 'question']);
Route::get('/ta', [RankController::class, 'ta']); /* salvar pontos do quiz */
Route::get('/ls', [RankController::class, 'ls']); /* salvar pontos do quiz */
Route::get('/wn', [RankController::class, 'wn']); /* salvar pontos do quiz */
Route::get('/Score', [RankController::class, 'mostra_dados']);

Route::get('/TryAgain', function() {
    return view('UcanMore');
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

Route::get('/Win', function(){
    return view('win');
});

Route::fallback(function(){
    return view('NotFound');
});