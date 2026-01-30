<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- PROYECTOS --}}
                <div class="bg-white p-6 shadow rounded">
                    <h3 class="font-bold mb-2">
                        {{ __('messages.projects') }}
                    </h3>

                    <p class="text-gray-600 mb-4">
                        Gestión de proyectos del sistema.
                    </p>

                    <a href="{{ route('projects.index') }}"
                       class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded hover:bg-blue-200">
                        Ver proyectos
                    </a>
                </div>

                {{-- ALUMNOS --}}
                <div class="bg-white p-6 shadow rounded">
                    <h3 class="font-bold mb-2">
                        {{ __('messages.students') }}
                    </h3>

                    <p class="text-gray-600 mb-4">
                        Gestión completa de alumnos.
                    </p>

                    <a href="{{ route('students.index') }}"
                       class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded hover:bg-blue-200">
                        Ver alumnos
                    </a>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
