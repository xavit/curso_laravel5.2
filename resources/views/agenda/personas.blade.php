@extends('layouts.master')

@section('pageTitle', 'Personas')

@section('css')
@endsection

@section('content')
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Bootstrap theme</a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider" role="separator"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/container-->
  {{-- 
  <table>
    <tr>
      <td>Código</td>
      <td>Nombre</td>
      <td>Apellido</td>
    </tr>
  @foreach ($personas as $persona)
  <tr>
    <td>{{ $persona->id }}</td>
    <td>{{ $persona->name }}</td>
    <td>{{ $persona->last_name }}</td>
  </tr>
  @endforeach     
  </table> 
  --}}
</nav>
<div role="main" class="container theme-showcase">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Laravel + Bootstrap</h1>
    <p>Este es un ejemplo de vista con Laravel</p>
  </div>


  


  <div class="page-header">
    <h1>Tables</h1>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cumpleaños</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($personas as $persona)
          <tr>
            <td>{{ $persona->id }}</td>
            <td>{{ $persona->name }}</td>
            <td>{{ $persona->last_name }}</td>
            <td>{{ date('d-M-Y', strtotime($persona->cumple)) }}</td>
            <td>
              <button class="btn btn-xs btn-success" type="button" onclick="editar($(this))" codigo="{{ $persona->id }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"> Editar</span>
              </button>
              <button class="btn btn-xs btn-danger" type="button" onclick="borrar($(this))" codigo="{{ $persona->id }}">  
                <span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"> Borrar</span>            
              </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
  </div>


      

</div><!--/main-->
@endsection

@section('javascripts')
<script>
	var editar = function(objeto){
    var id= objeto.attr('codigo');
    console.log("codigo: ", id);
    window.location.replace("{{ url('personas/formulario') }}" + '/?id=' + id);

  }
</script>
@endsection
