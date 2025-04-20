<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jetinno') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos compilados por Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="bg-light">
    @include('layouts.navigation')

    @isset($header)
        <header class="bg-white shadow-sm py-3 mb-4 border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header>
    @endisset

    <main class="container mb-5 p-4">
        @yield('content')
    </main>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
