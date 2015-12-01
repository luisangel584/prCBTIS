@extends('layout.layout')

@section('title')
Página del Proyecto
@stop

@section('content')
<div class="jumbotron">
     <h1>Bienvenido a nuestro proyecto</h1>
     <p>La Intranet de CBTIS N. 28</p>
     <p><a class="btn btn-primary btn-lg" href="mas-informacion" role="button">
    	Más información
     </a></p>
    <p ><a href="preguntasfrecuentes">¿Preguntas frecuentes?</a></p>
</div><!-- Large modal -->
      <div class="jumbotron">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Iniciar Sesion</button>
            <p ><a href="registro">¿No Tienes Cuenta?,Registrate Ya</a></p>
      </div>
       <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
      
  <div class="jumbotron">
          <h3>Iniciar Sesión</h3>
       <div class="input-group input-group-lg">
            <span class="input-group-addon glyphicon glyphicon-user" id="sizing-addon1"></span>
            <input type="text" class="form-control" placeholder="Nombre de Usuario" aria-describedby="sizing-addon1">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-addon glyphicon glyphicon-lock" id="sizing-addon1"></span>
             <input type="password" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon1">
  </div>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">
         Iniciar Sesión
         </a></p>
    </div>
    </div>
  </div>
</div>

@stop