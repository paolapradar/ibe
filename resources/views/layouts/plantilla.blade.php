<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="estudio, carrera, pegrado, universidad">
    		<meta name="author" content="alikangaro">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('/img/favicon/favicon16.png') }}"/>

        <title>IBE - Orientación educativa</title>

        <link rel="stylesheet" href="{{ url('/css/app.css') }}" />
        <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
        <script src="{{ url('/js/app.js') }}"></script>
        @yield("style")

    </head>
    <body>
        <header>
          <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="#">IBE</a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarsExample03" style="">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="#">Orientación</a>
                        <a class="dropdown-item" href="#">Pruebas</a>
                        <a class="dropdown-item" href="#">Acompañamiento</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Carreras</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="#">Facultad Ciencias</a>
                        <a class="dropdown-item" href="#">Ciencias Humanas</a>
                        <a class="dropdown-item" href="#">Economía y Diseño</a>
                        <a class="dropdown-item" href="#">Fisicomecánicas</a>
                        <a class="dropdown-item" href="#">Fisicoquímicas</a>
                        <a class="dropdown-item" href="#">Facultad de salud</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Eventos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contáctenos</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav mr-right">
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" href="#" data-target="#modalNewUsu">Registrarse</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="modal" href="#" data-target="#modalLogin">Ingresar</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-md-0">
                    <input class="form-control" placeholder="Buscar" type="text">
                  </form>
                </div>
              </nav>
        </header>

        <div class="position-ref full-height">
            <div class="content">
              @yield("content")
            </div>
        </div>

        <footer>
          <center>
            <p>Página creada para contribuir en un mundo mejor por <a href="https://twitter.com/mdo" target="_blank">Alikangaro</a> © 2018 </p>
          </center>
        </footer>

        <div class="content">
            <!--Modal Login-->
            @include('usuario/login')
            <!--Modal Registrarse-->
            @include('usuario/create')
        </div>
    </body>
</html>
