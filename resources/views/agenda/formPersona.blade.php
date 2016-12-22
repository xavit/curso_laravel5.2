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

<br><br>

  <div class="page-header">
    <h1>Gestión de Personas</h1>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <form data-toggle="validator" role="form">
        {{ csrf_field() }}
        <input type="hidden" id="id" name="id" value="{{ $persona->id or '' }}">
        <div class="form-group">
          <label for="name" class="control-label">Nombre</label>
          <input type="text" placeholder="Nombre..." id="name" name="name" value="{{ $persona->name or '' }}" class="form-control" required> 
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors">Hey look, this one has feedback icons!</div>         
        </div>
        <div class="form-group">
          <label for="last_name"  class="control-label">Apellido</label>
          <input type="text" placeholder="Apellido..." id="last_name" name="last_name" class="form-control" value="{{ $persona->last_name or '' }}" required>          
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors">Hey look, this one has feedback icons!</div>         
        </div>
        <div class="form-group">
          <label for="apodo" class="control-label">Apodo</label>
          <input type="text" placeholder="Apodo..." id="apodo" name="apodo" class="form-control" value="{{ $persona->apodo or '' }}" required>       
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors">Hey look, this one has feedback icons!</div>            
        </div>
        <div class="form-group">
          <label for="ci" class="control-label">Cédula de identidad</label>
          <input type="number" placeholder="1234567" id="ci" name="ci" class="form-control" value="{{ $persona->ci or '1' }}" step="1" min="1" required>  
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors">Hey look, this one has feedback icons!</div>         
        </div>        
        <div class="form-group">
          <label for="cumple" class="control-label">Fecha de Nacimiento</label>
          <input type="date" placeholder="dd-mm-yyyy" id="cumple" name="cumple" class="form-control" value="{{ isset($persona->cumple) ? date('d-m-Y', strtotime($persona->cumple)) : ''   }}">
        </div>
        
        {{-- <button class="btn btn-primary btnGuardarPersona" type="submit">Guardar</button> --}}
        <button class="btn btn-primary disabled" type="submit">Submit</button>
        <a href="{{ url('/') }}" class="btn btn-warning ">Cancelar</a>
      </form>
    </div>    
  </div>    

</div><!--/main-->
@endsection

@section('javascripts')
<script src="{{URL::asset('bootstrap-validator/js/validator.js') }}"></script>

<script>
var btnGuardarPersona = $(".btnGuardarPersona");
var form = $("form");

var guardar= function(){
  $.ajax({
    type: "POST",
    cache: false,
    dataType: "json",
    url: "{{ url('/personas/guardar') }}",
    data: form.serialize(),
    beforeSend: function(xhr)
    {
      //TODO Activar Spinner
    },
    success: function(dataResult)
    {                                           
      console.log(dataResult);
      if(dataResult.success){
        //alert("datos actualizados");
        window.location = "{{ url('/') }}";
      }
      // if(dataResult){
      //   location.reload();            
      // }
    },
    error: function(xhr, ajaxOptions, thrownError)
    {
      alert(xhr.status);
      alert(thrownError);          
    }
  });
}

form.validator().on('submit', function (e) {  
  if (e.isDefaultPrevented()) {
    alert("no es valido");
    // handle the invalid form...
  } else {
    alert("guardar");
    // everything looks good!
  }
})

/*Event Handler*/
// btnGuardarPersona.on("click", function(){
//   form.validator();
//   //guardar();
// });
// form.on("submit", function(e){
//   e.preventDefault();
// });
</script>
@endsection
