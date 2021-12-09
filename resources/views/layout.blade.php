<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Priki</title>

    @livewireStyles

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css')}}" rel="stylesheet">

    <nav class="site-header sticky-top bg-dark text-light">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="\">
                Priki
            </a>
            <a class="py-2 d-none d-md-inline-block" href="role">Role</a>
            <a class="py-2 d-none d-md-inline-block" href="domain">Domain</a>
            <a class="py-2 d-none d-md-inline-block" href="login">Connexion</a>
        </div>
    </nav>
</head>
<body class="antialiased">
<div class="ml-2">
    @yield('content')
    @livewireScripts
</div>
</body>
</html>
