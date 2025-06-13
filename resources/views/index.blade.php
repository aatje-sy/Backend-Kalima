@php use App\Http\Controllers\TurnController; @endphp
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
    @php
        $currentRow = session('currentRow', 0);
        $board = session('board', []);
    @endphp

    <form method="POST" action="{{ route('submit-word') }}">
        @csrf

        @for ($row = 0; $row < 6; $row++)
            <div class="input-container">
                @if (isset($board[$row]) && isset($board[$row]['letters']))
                    @foreach ($board[$row]['letters'] as $letter)
                        <div class="letter-box submitted">{{ $letter }}</div>
                    @endforeach
                @elseif ($row === $currentRow)
                    @for ($col = 0; $col < 5; $col++)
                        <input maxlength="1"
                               type="text"
                               name="inputs[{{ $row }}][{{ $col }}]"
                               autocomplete="off"
                               class="letter-input">
                    @endfor
                @else
                    @for ($col = 0; $col < 5; $col++)
                        <input maxlength="1"
                               type="text"
                               disabled
                               class="letter-input future">
                    @endfor
                @endif
            </div>
        @endfor

        <section class="game-bottom">
            <h1>Beurt: {{ session('turn') == 'player1' ? session('username') : session('username2') }}</h1>
            <div style="display: flex; gap: 1rem; margin-top: 1rem;">
                <button type="submit" class="game-button">Check</button>
    </form>

    <form action="{{ route('reset') }}" method="GET">
        <button type="submit" class="game-button">Replay</button>
    </form>
    </div>
    </section>
</main>

</body>
</html>
