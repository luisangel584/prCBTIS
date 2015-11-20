@extends('layout.layout')

@section('title')
Más información
@stop

@section('content')

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-responsive" src="http://cbtis28.mx/media/rokgallery/b/bf79d521-12d0-46f7-9b03-a43c1dcd02e3/8077c042-1889-4675-e240-6db1aa2b20ec.jpg" alt="...">
      <div class="caption">
        <h3>CBTIS</h3>
        <p>Nuestra escuela</p>
        <p><a href="http://cbtis28.mx/" class="btn btn-default" role="button">
        	Visitar página oficial <i class="glyphicon glyphicon-education"></i>
        	</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="http://cbtis28.mx/media/rokgallery/b/bf79d521-12d0-46f7-9b03-a43c1dcd02e3/8077c042-1889-4675-e240-6db1aa2b20ec.jpg" alt="...">
      <div class="caption">
        <h3>Nosotros</h3>
        <p>Somos el equipo de Desarrolladores</p>
        <p><a href="#" class="btn btn-default" role="button">Conócenos! <i class="glyphicon glyphicon-user"></i> </a></p>
      </div>
    </div>
  </div>
</div>

@stop