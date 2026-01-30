<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'PracticaLaravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body class="font-sans antialiased bg-gray-100">

<div class="min-h-screen">
    {{-- Navegación / Header --}}
    @include('layouts.navigation')

    {{-- Contenido --}}
    <main>
        {{ $slot }}
    </main>
</div>

{{-- Footer --}}
<x-footer />

</body>
</html>
