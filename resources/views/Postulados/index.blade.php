@include('admin-partes.header')


    @include('admin-partes.nav')

    <h1 class="text-center mt-4">Postulados</h1>

    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-bordo">
                <tr>
                    <th scole="col-3 th-index">Nombre Vacante</th>
                    <th scole="col-3 th-index">Nombre del Postulado</th>
                    <th scole="col-3 th-index">Email del Postulado</th>
                    <th scole="col-3 th-index">Ver su Perfil</th>

                </tr>
            </thead>
            <tbody>

        @if(count($postulados)>0)

            @foreach($postulados as $postulado)
                <tr>
                    <td>{{$postulado->vacante->titulo}}</td>
                    <td>{{$postulado->user->name}}</td>
                    <td>{{$postulado->user->email}}</td>
                    <td><a href="{{route('perfiles.show', ['perfil' => $postulado->user->id])}}">Ver perfil</a></td>
                </tr>

            @endforeach

        @else
                <p class="text-center">No hay postulados aun</p>
        @endif

            </tbody>
        </table>
    </div>


@include('admin-partes.footer')
