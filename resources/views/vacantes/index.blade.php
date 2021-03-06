@extends('layouts.app')

@section('style')
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css">
@endsection

@section('navegacion')
    @include('includes.navegacion')
@endsection

@section('content')


@section('fondo')

<div class="contenedor-vacantes">



@endsection




    <h2 class="text-center texto-actos">Todas Las Vacantes</h2>

    {{---<div class="nav-vacantes">
        @foreach($materias as $materia)
        <a href="{{route('materias.show', ['materia' => $materia->id])}}">{{$materia->nombre}}</a>
        @endforeach
    </div>--}}

    <div class="row">
        @if(count($vacantes) > 0 )
            @foreach($vacantes as $vacante)
            <div class="col-12 col-md-3 mb-4">
                <div class="card card-mati">
                    <div class="card-body">
                      <h5 class="card-title text-uppercase font-weight-bold">{{$vacante->titulo}}</h5>
                      <p>Caracter: {{$vacante->caracter}}</p>
                      <p>Institución: {{$vacante->colegio}}</p>
                      <p>Descripción: {{Str::words(strip_tags($vacante->descripcion), 6)}}</p>
                      <p>Horario: {{$vacante->horario}}</p>
                      <a href="{{route('vacantes.show', ['vacantes' => $vacante->id])}}" class="btn btn-outline-danger">Ver mas</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
        @else
        <p class="mensaje-if mt-5">No hay vacantes aun</p>

        @endif




    <div class="footer">
        <footer>
            <p class="text-center font-weight-bold mt-3">Footer de Mivacantefy 2020</p>
        </footer>
    </div>

 @endsection
</div>
