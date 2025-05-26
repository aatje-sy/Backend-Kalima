<?php

use App\Http\Controllers\turn;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Kalima</title>

</head>
<body class="light">
<header>
    <label class="switch">
        <input type="checkbox" id="themeToggle">
        <span class="slider"></span>
    </label>
</header>
    <main>

        <p>Beurt: {{ session('turn') == 'player1' ? session('username') : session('username2') }}</p>
        <h1>Welcome {{ session('username') }}</h1>
        <h1>Welcome {{ session('username2') }}</h1>
        <div class="input-container">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
        </div>

        <button>check</button>
        <div class="input-container">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
        </div>
        <button>check</button>

        <div class="input-container">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
        </div>
        <button>check</button>

        <div class="input-container">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
            <input maxlength="1" type="text" name="" id="">
        </div>
        <button>check</button>


        <form method="POST" action="{{ route('next-turn') }}">
            @csrf
            <button type="submit" >
                P L A Y
                <div id="clip">
                    <div id="leftTop" class="corner"></div>
                    <div id="rightBottom" class="corner"></div>
                    <div id="rightTop" class="corner"></div>
                    <div id="leftBottom" class="corner"></div>
                </div>
                <span id="rightArrow" class="arrow"></span>
                <span id="leftArrow" class="arrow"></span>
            </button>
        </form>





    @foreach ($araay as $key)
            {{ $key }}
        @endforeach


    </main>

<script>
    const toggle = document.getElementById('themeToggle');
    const body = document.body;

    // Als je voorkeur wilt onthouden in localStorage (optioneel)
    if (localStorage.getItem('theme') === 'dark') {
        body.classList.remove('light');
        body.classList.add('dark');
        toggle.checked = true;
    }

    toggle.addEventListener('change', () => {
        if (toggle.checked) {
            body.classList.remove('light');
            body.classList.add('dark');
            localStorage.setItem('theme', 'dark'); // optioneel
        } else {
            body.classList.remove('dark');
            body.classList.add('light');
            localStorage.setItem('theme', 'light'); // optioneel
        }
    });
</script>

</body>
</html>


