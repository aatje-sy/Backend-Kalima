<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\turn;

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


Route::post('/next-turn', [turn::class, 'turns'])->name('next-turn');
