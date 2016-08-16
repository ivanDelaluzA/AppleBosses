@extends('layouts.master')

@section('title', 'Formulario')

@section('content')
<div class="container">
  <div class="panel bs-wizard bs-wizard-steps-with-progress">
    <div class="panel-heading">
      <div class="panel-title text-center shadow" style="font-size: 20px; color: #125FB5;"></div>
      <div class="steps-centered" id="mover">
        <div class="progress progress-striped">
          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
          </div>
        </div><!--.progress-->
        <ul class="wizard-steps">
          <li class="step" data-title="¿QUE TIPO DE CONSTANCIA NECESITA?">
            <a href="#tipo" data-toggle="tab" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
          </li>

          <li class="step" data-title="¿SELECCIONE UN JEFE DE MANZANA?">
            <a href="#jefe" data-toggle="tab" class="btn btn-white"><i class="fa fa-map-marker"></i></a>
          </li>

          <li class="step" data-title="¿DATOS PERSONALES?">
            <a href="#datos" data-toggle="tab" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
          </li>

          <li class="step" data-title="¿UTILIZARÁ ESTE DOCUMENTO PARA?">
            <a href="#razon" data-toggle="tab" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
          </li>

          <li class="step" data-title="FINALIZAR">
            <a href="#finalizar" data-toggle="tab" class="btn btn-white"><i class="fa fa-comments-o"></i></a>
          </li>
        </ul><!--.wizard-steps-->
      </div><!--.steps-centered-->
    </div><!--.panel-heading-->

    <div class="panel-body">
     {!! Form::open(['route' => 'requests.store', 'id' => 'createForm']) !!}
     <div class="tab-content">
      @include('public.requests.form')
    </div><!--.tab-content-->
    {!! Form::close() !!}
  </div><!--.panel-body-->


  <div class="panel-footer">
    <ul class="wizard clearfix">
      <li class="bs-wizard-prev pull-left"><button class="btn btn-amber" id="buttonBack"><i class="fa fa-arrow-circle-left"></i> Atras</button></li>
      <li class="bs-wizard-next pull-right"><button id="buttonChange" class="btn btn-indigo">Seguir <i class="fa fa-arrow-circle-right"></i></button></li>
      
    </ul>
  </div><!--.panel-footer-->

</div><!--.panel-->

<!-- Modal -->
<div class="modal fade" id="defaultModal" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-light-green">Determinar su ubicación</h4>
      </div>
      <div class="modal-body">
        <p> Te ayudamos a localizar a tu jefe de manzana mas sercano a tu domicilio </p>
      </div>
      <div class="modal-footer" style="text-align: center;">
        <button type="button" class="btn btn btn-purple btn-ripple" data-dismiss="modal">Entendido</button>
      </div>
    </div><!--.modal-content-->
  </div><!--.modal-dialog-->
</div><!--.modal-->
</div>

@stop