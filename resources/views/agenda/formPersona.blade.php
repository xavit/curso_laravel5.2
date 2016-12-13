@extends('layouts.master')

@section('pageTitle', 'Formulario de Personas')

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
  
</nav>
<div role="main" class="container theme-showcase">



  <div class="page-header">
    <h1>Gestión de Personas</h1>
  </div>
  
  <div class="row">
    <div class="col-md-12">      
    </div>    
  </div>    

</div><!--/main-->
@endsection

@section('javascripts')
<script>
	
</script>
@endsection
