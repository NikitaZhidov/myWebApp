<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>app</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<style>
    .header {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    a {
        color: #202020;
        text-decoration: none;
    }

    .authbtn {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 24px;
        margin: 0px 12px 0px 0px;
    }

    .authbtn:last-child {
        margin: 0;
    }
</style>

<body>
    <div id="app">
        <div class="header">
            <navbar></navbar>
            @if (Route::has('login'))
            <div>
                @auth
                <a href="{{ url('/home') }}" class="authbtn">Home</a>
                @else
                <a href="{{ route('login') }}" class="authbtn">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 authbtn">Register</a>
                @endif
                @endif
            </div>
            @endif
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>