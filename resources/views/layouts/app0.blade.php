<html lang="es">

<head>
    <!--Import Google Icon Font-->
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!--link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/genera.css') }}" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!--Principio de la cabecera-->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <!--Principio de menu derecho-->
                @yield('MenuDerecho')
                <!--fin de menu derecho-->
                <!--boton de menu y logo-->
                @yield('MenuLogo')
                <!--fin de boton y logo-->
                <!--buscador-->
                <div class="buscadorTO">
                    @yield('buscador')
                </div>
                <!--fin del buscador -->
            </div>
        </nav>
    </div>
    <!--fin cabecera-->
    <!--Principio de cuerpo-->
    <div class="container section">
        @yield('content')
    </div>
    <!--fin cuerpo-->
    <!--menu izquierdo-->
    <div class="menu-to">
        <div id="menu-slide" class="menu-Ez z-depth-3">
            @yield('menu')
        </div>
    </div>
    <!--fin menu-->
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--script src="https://kit.fontawesome.com/b99e675b6e.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    @yield('script')
</body>

</html>