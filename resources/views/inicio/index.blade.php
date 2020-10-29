@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="css/estilos.css">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
@endsection

@section('navegacion')
    @include('includes.navegacion')
@endsection

@section('content')


    <h1 class="text-center texto-actos">Mivacante.<small>fy</small></h1>

    <div class="imagen-success">

    <div class="parrafo-index">
    <p class="texto-parrafo">
        <span>Encontra Vacantes</span><br>
        Con esta aplicacion podras ver y postularte a distintas vacantes de manera facil y rapida.
        Puedes obtener mas informacion de las vacantes en <a href="" class="boton-index">Sobre Vacantes</a>

    </p>
    </div>

    <div class="imagen">
        <img src="{{asset('img/imagen1.jpg')}}" alt="">
    </div>
    </div>

    <div class="seccion-iconos">
        <div class="iconos">
            <i class="far fa-smile-wink"></i>
            <br>
            <h3>Encontra tu vacante</h3>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, veniam!</p>
        </div>
        <div class="iconos">
            <i class="fas fa-laugh-squint"></i>
            <br>
            <h3>Efectivad 100%</h3>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, veniam!</p>
        </div>

        <div class="iconos">
            <i class="far fa-grin-squint-tears"></i>
            <br>
            <h3>Usuarios Satisfechos</h3>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, veniam!</p>
        </div>
    </div>


    <div class="footer">
        <footer>
            <p class="text-center font-weight-bold mt-3">Footer de Mivacantefy 2020</p>
        </footer>
    </div>


@endsection


