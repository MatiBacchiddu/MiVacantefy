@include('admin-partes.header')


    @include('admin-partes.nav')

    <main class="main-admin">
        <h1 class="text-center mt-5">Administra todas las vacantes desde aqui</h1>
        <hr class="hr-admin">
    </main>

    <div class="admin-img">
        <div class="imagen1">
        <img src="{{asset('img/laptop_S.png')}}" alt="">
        </div>

        <div class="imagen2">
            <img src="{{asset('img/phone_S.png')}}" alt="">
        </div>
    </div>

    <p class="parrafo-admin">Desde tu celular o laptop</p>


@include('admin-partes.footer')
