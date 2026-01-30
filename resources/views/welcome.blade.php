<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-blue-100 relative">

<!-- BOTONES ARRIBA A LA DERECHA -->
<div class="fixed top-6 right-6 z-50 flex gap-4">
    <a href="{{ route('login') }}"
       class="bg-gray-900 text-white px-5 py-2 rounded-full shadow-lg hover:bg-gray-800 transition">
        Login
    </a>

    <a href="{{ route('register') }}"
       class="bg-gray-900 text-white px-5 py-2 rounded-full shadow-lg hover:bg-gray-800 transition">
        Register
    </a>
</div>


<!-- CONTENIDO CENTRADO -->
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-10 rounded-2xl shadow-md text-center max-w-md">

        <!-- LOGO LARAVEL -->
        <div class="flex justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-gray-400"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 4.5l7.5 4.33v6.34L12 19.5l-7.5-4.33V8.83L12 4.5z" />
            </svg>
        </div>

        <h1 class="text-3xl font-bold mb-4">
            Bienvenido a la aplicación
        </h1>

        <p class="text-gray-600">
            Gestión de proyectos y alumnos con Laravel
        </p>
    </div>
</div>

</body>
</html>
