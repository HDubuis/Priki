<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Priki</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">

    <nav class="site-header sticky-top py-1 bg-dark text-light">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="\">
                Priki
            </a>
            <a class="py-2 d-none d-md-inline-block" href="role">Role</a>
            <a class="py-2 d-none d-md-inline-block" href="domain">Domain</a>
        </div>
    </nav>
</head>
<body class="antialiased">
@yield('content')
</body>
</html>
