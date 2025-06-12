<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class turn extends Controller
{
    public function turns()
    {
        if (session('turn') === 'player1') {
            session()->put('turn', 'player2');
        } else {
            session()->put('turn', 'player1');
        }
        $araay = [1,0,2,0,0];


        return view('index', ['araay' => $araay]);

    }
}
