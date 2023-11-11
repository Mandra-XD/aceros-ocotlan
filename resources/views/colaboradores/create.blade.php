<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class=" contenido bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <h2>Alta de colaborador</h2>
                    <form class="row g-3" id="postForm" method="POST" action="{{ route('colaborador.store') }}">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Primer apellido</label>
                            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido"
                                required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Segundo Apellido</label>
                            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido"
                                required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">RFC</label>
                            <input type="text" class="form-control" id="rfc" name="rfc" required>
                        </div>

                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Departamento</label>
                            <select id="departamento_id" name="departamento_id" class="form-select">
                                @foreach ($departamentos as $departamento)
                                    <option selected>seleccione una opcion...</option>

                                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            {{-- <button type="button"
                            onclick="showAlert()"
                             class="btn btn-primary"
                             style="background-color:green">Sign in</button> --}}
                            <button type="button"  id="crear"
                            class="btn btn-primary"
                            style="">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script  type="text/javascript">


var boton = document.getElementById("crear");

if (boton) {
    boton.addEventListener('click',showAlert,true);
         function showAlert()
    {
        let nombre = document.getElementById('nombre').value;
        let primer_apellido = document.getElementById('primer_apellido').value;
        let segundo_apellido = document.getElementById('segundo_apellido').value;
        let rfc = document.getElementById('rfc').value;
        let departamento = document.getElementById('departamento_id').value;


        let mensaje ="Nombre"+nombre+"\n"
        +"Primer apellido"+primer_apellido+"\n"
        +"segundo apellido"+segundo_apellido+"\n"
        +"rfc"+rfc+"\n"
        +"departamento"+departamento+"\n"


        if (confirm(mensaje)) {
                document.getElementById('postForm').submit();

            }
    }
}



</script>
</x-app-layout>
