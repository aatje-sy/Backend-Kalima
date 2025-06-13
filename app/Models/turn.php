<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class turn extends Model
{

        public function turns()
        {
            if (session('turn') === 'player1') {
                session()->put('turn', 'player2');
            } else {
                session()->put('turn', 'player1');
            }
            return redirect('/index'); // of je juiste view naam

        }
}
