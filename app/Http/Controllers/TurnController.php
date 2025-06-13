<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TurnController extends Controller
{
    public function turns()
    {
        $board = session('board', []);
        $currentRow = session('currentRow', 0);

        if (count($board) >= 6) {
            array_shift($board);              // verwijder bovenste
            $currentRow = 5;                  // verplaats invoer naar onder
            session()->put('board', $board);
            session()->put('currentRow', $currentRow);
        }

        return view('index', ['araay' => [1, 0, 2, 0, 0]]);
    }
}
