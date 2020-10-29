@include('admin-partes.header')

@include('admin-partes.nav')

<main class="main-admin">
    <h1 class="text-center mt-5">Todas las Vacantes</h1>
    <hr class="hr-vacantes">
</main>

<div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-bordo">
                <tr>
                    <th scole="col-3 th-index">Titulo</th>
                    <th scole="col-3 th-index">Descripcion</th>
                    <th scole="col-3 th-index">Horarios</th>
                    <th scole="col-3 th-index">Materia</th>
                    <th scole="col-3 th-index">Acciones</th>

                </tr>
            </thead>
            <tbody>

        @if(count($vacantes)>0)

            @foreach($vacantes as $vacante)

                <tr>
                    <td>{{$vacante->titulo}}</td>
                    <td>{{$vacante->descripcion}}</td>
                    <td>{{$vacante->horario}}</td>
                    <td>{{$vacante->materia->nombre}}</td>
                </tr>

            @endforeach

        @else
                <p class="text-center">No hay vacantes aun</p>
        @endif

            </tbody>
        </table>
    </div>


@include('admin-partes.footer')
