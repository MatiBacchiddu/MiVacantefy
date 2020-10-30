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

    <h2 class="text-center titulo-vacante">Mis vacantes</h2>
    {{$vacantes}}


@endsection
