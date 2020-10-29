@include('admin-partes.header')

@include('admin-partes.nav')

<div class="seleccion">
    <div class="ver-vacantes">
        <a href="{{route('vacanteAdmin.index')}}">Ver todas las Vacantes</a>
    </div>

    <div class="crear-vacante">
        <a href="{{route('vacanteAdmin.create')}}">Crear Vacante</a>
    </div>
</div>

@include('admin-partes.footer')
