<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- BOTONES SUPERIORES --}}
            <div class="flex justify-between items-center mb-6">
                {{-- VOLVER --}}
                <a href="{{ route('dashboard') }}"
                   class="inline-block bg-gray-100 text-gray-700 px-4 py-2 rounded hover:bg-gray-200">
                    ← Volver al dashboard
                </a>

                {{-- CREAR --}}
                @if(auth()->user()->email === 'admin@gmail.com')
                    <a href="{{ route('students.create') }}"
                       class="inline-block bg-gray-100 text-gray-700 px-4 py-2 rounded hover:bg-gray-200">
                        Crear alumno
                    </a>
                @endif
            </div>

            {{-- MENSAJE --}}
            @if(session('success'))
                <div class="mb-4 text-green-600 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-6 shadow rounded">

                <table class="w-full border-collapse">
                    <thead>
                    <tr class="border-b">
                        <th class="py-2 text-center">Nombre</th>
                        <th class="py-2 text-center">Email</th>
                        <th class="py-2 text-center">Curso</th>
                        @if(auth()->user()->email === 'admin@gmail.com')
                            <th class="py-2 text-center">Acciones</th>
                        @endif
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($students as $student)
                        <tr class="border-b">
                            <td class="py-4 text-center">
                                {{ $student->name }}
                            </td>

                            <td class="py-4 text-center">
                                {{ $student->email }}
                            </td>

                            <td class="py-4 text-center">
                                {{ $student->course }}
                            </td>

                            @if(auth()->user()->email === 'admin@gmail.com')
                                <td class="py-4 text-center">
                                    <div class="flex flex-col items-center gap-2">
                                        <a href="{{ route('students.edit', $student) }}"
                                           class="text-blue-600 hover:underline">
                                            Editar
                                        </a>

                                        <form action="{{ route('students.destroy', $student) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                onclick="return confirm('¿Eliminar alumno?')"
                                                class="text-red-600 hover:underline">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{-- PAGINACIÓN --}}
                <div class="mt-6">
                    {{ $students->links() }}
                </div>

            </div>

        </div>
    </div>
</x-app-layout>

<script>
    function confirmDelete(studentId) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Este alumno será eliminado definitivamente',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + studentId).submit();
            }
        });
    }
</script>
