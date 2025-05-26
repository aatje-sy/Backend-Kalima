<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
    <title>Kalima Login</title>
</head>
<body>
<div class="login-card">
    <div class="card-header">
        <div class="log">Login</div>
    </div>

    <form method="POST" action="{{ route('game') }}">
        @csrf
        <div class="form-group">
            <label for="username">Username speler 1:</label>
            <input required name="username" id="username" type="text">
        </div>
        <div class="form-group">
            <label for="username2">Username speler 2:</label>
            <input required name="username2" id="username2" type="text">
        </div>
        <div class="form-group">
            <input value="Start Spel" type="submit">
        </div>
    </form>

</div>
</body>
</html>
