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


<div class="foto-perfil">
    <img class="logoperfil" src="{{asset('img/logoperfil5.jpeg')}}" alt="imagen">
</div>

<div class="perfil-header">


    <div class="nombre-delusuario">
        <h2 class="text-center mb-2 nombre-usuario">{{$perfil->usuario->name}}<h2>
    </div>

    <div class="editar">
        <a class="link-edit" href="{{route('perfiles.edit', ['perfil' => Auth::user()->id])}}"><i class="fas fa-cog"></i></a>
    </div>
</div>

<div class="container">
    <div>
        <div class="biografia contenedor-perfil text-center">
            @if($perfil->biografia)
            <span>Biografia: </span>
            <br>
            {!! $perfil->biografia !!}
            @else
                <p class="texto-perfil">No hay biografia aun</p>
            @endif
            <br>
            @if($perfil->estudios)
            <span>Estudios: </span>
            <br>
            {!! $perfil->estudios !!}
            @else
                <p class="texto-perfil">Este usuario no tiene estudios </p>
            @endif
        </div>
    </div>
</div>

@endsection
