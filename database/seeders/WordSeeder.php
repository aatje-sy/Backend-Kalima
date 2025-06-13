<?php

use App\Models\Word;
use Illuminate\Database\Seeder;

class WordSeeder extends Seeder
{
    public function run()
    {
        $words = [
            ["word" => "arise", "score" => 36368],
            ["word" => "awake", "score" => 9768],
            ["word" => "apple", "score" => 7840],
        ];

        foreach ($words as $data) {
            Word::updateOrCreate(['word' => $data['word']], $data);
        }
    }
}
