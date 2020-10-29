@include('admin-partes.header')

@include('admin-partes.nav')

<main class="main-admin">
    <h1 class="text-center mt-5">Crea una nueva Vacante</h1>
    <hr class="hr-vacantes">
</main>

<div class="container contenedor-formulario">
        <form action="{{route('vacanteAdmin.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo de la Vacante</label>
                <input type="text" name="titulo" class="form-control">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion del Puesto</label>
                <input type="text" name="descripcion" class="form-control">
            </div>

            <div class="form-group">
                <label for="horario">Horarios y Dias </label>
                <input type="text" name="horario" class="form-control">
            </div>

            <div class="form-group">
                <label for="requisitos">Requisitos para el Puesto</label>
                <input type="text" name="requisitos" class="form-control">
            </div>

            <div class="form-group">
                <label for="materia">Materia</label>
                <select class="form-control" id="materia" name="materia">
                <option disabled selected>Seleccione una Materia</option>
                @foreach($materias as $materia)
                    <option value="{{$materia->id}}">
                        {{$materia->nombre}}
                    </option>
                @endforeach
                </select>
            </div>

            <button type="submit" class="boton-formulario">Listo!</button>

        </form>
</div>



@include('admin-partes.footer')
