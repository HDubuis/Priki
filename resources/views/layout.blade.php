<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Priki</title>

    @livewireStyles

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css')}}" rel="stylesheet">

    <nav class="site-header sticky-top bg-dark">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 layout" href="\">
                Priki
            </a>
            <a class="py-2 layout d-none d-md-inline-block" href="role">Role</a>
            <a class="py-2 layout d-none d-md-inline-block" href="domain">Domain</a>
            @auth
                <div class="py-2 d-none d-md-inline-block text-light" >
                    Connecté en tant que {{ Auth::user()->fullname }} alias {{ Auth::user()->name }}
                </div>

                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-link text-light">Déconnexion</button>
                </form>
            @else
                <a class="py-2 d-none layout d-md-inline-block" href="login">Connexion</a>
            @endauth
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
