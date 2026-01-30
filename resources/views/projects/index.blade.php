<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- BOTÓN VOLVER --}}
            <div class="mb-6">
                <a href="{{ route('dashboard') }}"
                   class="inline-block bg-gray-100 text-gray-700 px-4 py-2 rounded hover:bg-gray-200">
                    ← Volver al dashboard
                </a>
            </div>

            <div class="bg-white p-6 shadow rounded">

                <ul class="space-y-6">
                    @foreach ($projects as $project)
                        <li class="border-b pb-4">
                            <h3 class="font-bold text-lg mb-1">
                                {{ $project->name }}
                            </h3>
                            <p class="text-gray-600">
                                {{ $project->description }}
                            </p>
                        </li>
                    @endforeach
                </ul>

            </div>

        </div>
    </div>
</x-app-layout>
