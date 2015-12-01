@extends('layout.layout')

@section('title')
preguntas frecuentes
@stop

@section('content')
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Qué es Php?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Php es un lenguaje HTML-embeeded que te permite incluir un código de programación en las páginas html para producir un output dinámico en relación con las exigencias de los usuarios.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ¿Cómo funciona? 
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      l código en Php incluido en una página html se ejecuta en el servidor antes de que se 
      envíe la página al usuario que lo pida. Para hacer esto es necesario que en el servidor se instale el paquete Php que procede a la compilación del código. 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         ¿Cómo se usa Php? 
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
       Para empezar, es necesario descargar el paquete software del sitio http://www.php.net e instalarlo después en el servidor en el que se quiere operar, siguiendo las instrucciones adjuntas. 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          ¿Cuánto cuesta Php? 
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
      Php no cuesta nada. Cualquiera lo puede utilizar para sus sitios, después de haber leído la General Public License (http://www.gnu.org). 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          ¿Como se incluye el código Php en una página html?  
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
     Es suficiente introducir el código en los tag: "". El código será ejecutado por el servidor cuando se cargue la página.  
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          ¿Cómo puedo saber si mi servidor soporta el lenguaje Php? 
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
      Basta con crear un archivo que contenga la línea:

<? phpinfo(); ?>

Cargando la página con el propio navegador se tendrían que ver una serie de informaciones sobre Php. Si no es así, significa que Php no está presente en el servidor.  
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          ¿Cómo funciona? 
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
      l código en Php incluido en una página html se ejecuta en el servidor antes de que se 
      envíe la página al usuario que lo pida. Para hacer esto es necesario que en el servidor se instale el paquete Php que procede a la compilación del código. 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEight">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          ¿Cómo funciona? 
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
      <div class="panel-body">
      l código en Php incluido en una página html se ejecuta en el servidor antes de que se 
      envíe la página al usuario que lo pida. Para hacer esto es necesario que en el servidor se instale el paquete Php que procede a la compilación del código. 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingNine">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          ¿Cómo funciona? 
        </a>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
      <div class="panel-body">
      l código en Php incluido en una página html se ejecuta en el servidor antes de que se 
      envíe la página al usuario que lo pida. Para hacer esto es necesario que en el servidor se instale el paquete Php que procede a la compilación del código. 
      </div>
    </div>
  </div>
</div>
@stop