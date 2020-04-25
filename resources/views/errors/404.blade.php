<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>Tooden - @yield('Titulo')</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link rel="stylesheet" href="{{ asset('css/MaterialIcon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/error.css') }}">
	@yield('css')
</head><body>
  <section id="not-found">
    <div id="title">Lo sentimo &bull; 404 Error Pagina<br><a href="{{ url('/panel/inicio') }}">Regresar</a></div>
    <div class="circles">
      <p>404<br>
       <small>Pagina no Encotrada</small>
      </p>
      <span class="circle big"></span>
      <span class="circle med"></span>
      <span class="circle small"></span>
    </div>
  </section>
 </body>