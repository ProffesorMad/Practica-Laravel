<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Proyectos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow rounded">

                <ul class="space-y-4">
                    @foreach ($projects as $project)
                        <li>
                            <h3 class="font-bold">{{ $project->name }}</h3>
                            <p class="text-gray-600">{{ $project->description }}</p>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>
