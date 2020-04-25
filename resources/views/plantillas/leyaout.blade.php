<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>Tooden - @yield('Titulo')</title>
	<link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/MaterialIcon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	@yield('css')
</head>
<body>
    <!--nav>    

    </nav-->
  @yield('PanelMenu')
  @yield('menu')
<!-- Compiled and minified JavaScript -->
@yield('js')
@if(config('app.env') == 'local')
    <script src="http://localhost:35729/livereload.js"></script>
@endif
</body>
</html>