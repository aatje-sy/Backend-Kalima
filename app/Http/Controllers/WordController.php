<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function submitWord(Request $request)
    {
        $inputs = $request->input('inputs');
        $currentRow = session('currentRow', 0);
        $turn = session('turn', 'player1');

        $letters = $inputs[$currentRow] ?? [];
        $word = implode('', $letters);

        $board = session('board', []);
        $board[$currentRow] = ['letters' => $letters, 'player' => $turn];
        $currentRow++;

        session()->put('board', $board);
        session()->put('currentRow', $currentRow);
        session()->put('turn', $turn === 'player1' ? 'player2' : 'player1');

        return redirect()->route('next-turn');
    }
}

