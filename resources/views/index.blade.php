<?php

use App\Http\Controllers\turn;

?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalima</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="light">
<header>
    <label class="switch">
        <input type="checkbox" id="themeToggle">
        <span class="slider"></span>
    </label>

    <div class="players-container">
        <h1>Spelers</h1>
        <p>{{ session('username') }} vs {{ session('username2') }}</p>
    </div>

    @foreach ($araay as $key)
        {{ $key }}
    @endforeach
</header>
<main>


    @for ($row = 0; $row < 5; $row++)
        <div class="input-container">
            @for ($col = 0; $col < 5; $col++)
                <input maxlength="1" type="text" name="inputs[{{ $row }}][{{ $col }}]" autocomplete="off">
            @endfor
        </div>
    @endfor

    <section class="game-bottom">
        <h1>Beurt: {{ session('turn') == 'player1' ? session('username') : session('username2') }}</h1>

        <form method="POST" action="{{ route('next-turn') }}">
            @csrf
            <button type="submit">
                Check
            </button>
        </form>
    </section>

</main>

</body>
</html>


