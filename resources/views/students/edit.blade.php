<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Editar alumno</h2>
    </x-slot>

    <div class="py-12 max-w-xl mx-auto">
        <form method="POST" action="{{ route('students.update', $student) }}">
            @csrf
            @method('PUT')

            <input name="name" value="{{ $student->name }}" class="block w-full mb-4">
            <input name="email" value="{{ $student->email }}" class="block w-full mb-4">
            <input name="course" value="{{ $student->course }}" class="block w-full mb-4">

            <button class="text-blue-600">Actualizar</button>
            <a href="{{ route('students.index') }}" class="ml-4">Cancelar</a>
        </form>
    </div>
</x-app-layout>
