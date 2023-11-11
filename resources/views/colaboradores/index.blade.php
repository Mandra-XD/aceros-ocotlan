
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <button type="button" class="btn " style=" background-color:green"><a
                        href="{{ route('colaborador.create') }}">Crear</a></button>

                        <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre</th>
                            <th scope="col">primer apellido</th>
                            <th scope="col">segundo apellido</th>
                            <th scope="col">rfc</th>
                            <th scope="col">departamento</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colaboradores as $colaboradore)
                            <tr>
                                <td scope="row">{{ $colaboradore->id }}</td>
                                </th>
                                <td>{{ $colaboradore->nombre }}</td>
                                <td>{{ $colaboradore->primer_apellido }}</td>
                                <td>{{ $colaboradore->segundo_apellido  }}</td>
                                <td>{{ $colaboradore->rfc }}</td>
                                <td>{{ $colaboradore->departamento->nombre }}</td>
                                <form  method="POST" action="{{route('colaborador.delete', $colaboradore->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                                </form>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
