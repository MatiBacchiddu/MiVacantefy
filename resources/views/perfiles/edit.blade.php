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

<div class="header-editar">
<a href="{{route('perfiles.show', ['perfil' => Auth::user()->id])}}" class="navegacion-inicio"><i class="fas icono-volver fa-long-arrow-alt-left"></i></a>
<h1 class="text-center">Editar Mi Perfil</h1>
</div>

<div class="container contenedor-formularioEdit">
    <form action="{{route('perfiles.update', ['perfil' => $perfil->id])}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{$perfil->usuario->name}}" class="form-control" placeholder="tu nombre">
        </div>

        <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control" placeholder="tu correo">
        </div>

        <div class="form-group">
            <label for="biografia">Biografia</label>
            <textarea class="form-control" name="biografia" id="biogradia" rows="3" value="{{$perfil->biografia}}">{{$perfil->biografia}}</textarea>
          </div>


        <div class="form-group">
            <label for="estudios">Tus estudios</label>
            <textarea class="form-control" value="{{$perfil->estudios}}" name="estudios" id="biogradia" rows="3">{{$perfil->estudios}}</textarea>
        </div>

        <button type="submit" class="boton-formulario">Actualizar</button>

    </form>
</div>

@endsection
