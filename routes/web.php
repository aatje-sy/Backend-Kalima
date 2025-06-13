<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use App\Http\Controllers\TurnController;

Route::get('/', function () {
    return view('layouts.loginlayout');
});


Route::POST('/Game-Dashboard', function () {
    request('username');
    session()->put('username', request('username'));
    session()->put('username2', request('username2'));
    session()->put('turn', 'player1');
    return view('/index', ['araay' => [1,2]]);
})->name('game');

Route::get('/reset', function () {
    session()->flush();
    return redirect('/');
})->name('reset');


Route::post('/submit-word', [WordController::class, 'submitWord'])->name('submit-word');
Route::any('/next-turn', [TurnController::class, 'turns'])->name('next-turn');
