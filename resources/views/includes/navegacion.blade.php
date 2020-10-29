<nav class="navbar navbar-expand-md navbar-light categorias-bg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#categorias" aria-controls="categorias" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="categorias">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav w-100 d-flex justify-content-around">
                <li class="nav-item nav-inicio">
                    <a class="nav-link" href="{{route('inicio.index')}}"><i class="fas fa-home icono-fa"></i></a>
                </li>

                <li class="nav-item nav-inicio">
                    <a class="nav-link navegacion-inicio" href="{{route('vacantes.index')}}">Vacantes</a>
                </li>

                <li class="nav-item nav-inicio">
                    <a class="nav-link navegacion-inicio" href="#">Sobre MiVacantefy</a>
                </li>

                <li class="nav-item nav-inicio">
                    <a class="nav-link navegacion-inicio" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<hr class="hr-navegacion">
