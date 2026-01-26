<x-guest-layout>
    <div class="text-center py-20">
        <h1 class="text-4xl font-bold mb-4">
            Bienvenido a la aplicación
        </h1>

        <p class="text-gray-600 mb-8">
            Gestión de proyectos y alumnos con Laravel
        </p>

        <div class="space-x-4">
            <a href="{{ route('login') }}"
               class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                Login
            </a>

            <a href="{{ route('register') }}"
               class="bg-gray-600 text-white px-6 py-2 rounded hover:bg-gray-700">
                Registro
            </a>
        </div>
    </div>
</x-guest-layout>
