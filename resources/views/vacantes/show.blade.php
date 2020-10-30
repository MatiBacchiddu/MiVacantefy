@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
@endsection

@section('navegacion')
    @include('includes.navegacion')
@endsection

@section('content')

    <h2 class="text-center titulo-vacante">{{$vacantes->titulo}}</h2>

<form action="{{route('postulado.store')}}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <input type="hidden" name="vacante_id" value="{{$vacantes->id}}">
    <div class="container">
        <div class="row">
          <div class="col titulo-desc">
            <p><span>Materia: </span>{{$vacantes->materia->nombre}}</p>
            <p><span>Descripción: </span>{{$vacantes->descripcion}}</p>
          </div>
          <div class="col horario-req">
            <p><span>Horario: </span>{{$vacantes->horario}}</p>
            <p><span>Requisitos: </span>{{$vacantes->requisitos}}</p>
          </div>
        <div>
    </div>

    <div class="principal-post">
    <p>¿Es lo que buscabas?</p>
    <input type="submit" class="boton-postulacion" value="Enviar Postulación">
    </div>

</form>


@endsection

