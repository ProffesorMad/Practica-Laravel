<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel principal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- CARD PROYECTOS --}}
                <div class="bg-white p-6 shadow rounded">
                    <h3 class="font-bold mb-2">Proyectos</h3>
                    <p class="mb-3">Gestión de proyectos del sistema.</p>

                    <a href="{{ route('projects.index') }}"
                       class="text-blue-600 hover:underline font-medium">
                        Ver proyectos
                    </a>
                </div>

                {{-- CARD ALUMNOS --}}
                <div class="bg-white p-6 shadow rounded">
                    <h3 class="font-bold mb-2">Alumnos</h3>
                    <p>Gestión completa de alumnos.</p>

                    <a href="{{ route('students.index') }}"
                       class="text-blue-600 hover:underline">
                        Ver alumnos
                    </a>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
