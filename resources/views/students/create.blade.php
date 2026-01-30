<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Nuevo alumno</h2>
    </x-slot>

    <div class="py-12 max-w-xl mx-auto">
        <form method="POST" action="{{ route('students.store') }}">
@csrf

<input name="name" placeholder="Nombre" class="block w-full mb-4">
<input name="email" placeholder="Email" class="block w-full mb-4">
<input name="course" placeholder="Curso" class="block w-full mb-4">

<button class="text-blue-600">Guardar</button>
<a href="{{ route('students.index') }}" class="ml-4">Cancelar</a>
</form>
</div>
</x-app-layout>
