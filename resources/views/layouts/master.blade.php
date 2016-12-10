<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curso Laravel | @yield('pageTitle')</title>
 
    <!-- CSS de Bootstrap -->
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="{{URL::asset('css/bootstrap-theme.min.css') }}" rel="stylesheet"> 

    @yield('css')
     
  </head>
  <body>
     @yield('content')    
 
    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
 
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
    @yield('javascripts')
  </body>
</html>

