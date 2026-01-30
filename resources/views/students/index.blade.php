<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
Alumnos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

@if(session('success'))
    <div class="mb-4 text-green-600">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('students.create') }}"
   class="mb-4 inline-block text-blue-600 hover:underline">
    Crear alumno
</a>

<div class="bg-white p-6 shadow rounded">
    <table class="w-full">
        <thead>
        <tr class="border-b">
            <th class="text-left">Nombre</th>
            <th class="text-left">Email</th>
            <th class="text-left">Curso</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr class="border-b">
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->course }}</td>
                <td class="space-x-2">
                    <a href="{{ route('students.edit', $student) }}" class="text-blue-600">Editar</a>

                    <form action="{{ route('students.destroy', $student) }}"
                          method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $students->links() }}
    </div>
</div>

</div>
</div>
</x-app-layout>
