@extends('layouts.masterComplete')

@section('title', 'Editar Permisos')

@section('styles')
    @parent
    
@stop

@section('scripts')

@stop

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title"><h2>Permisos</h2></div>
                </div><!--.panel-heading-->
                <div class="panel-body">
                    

                    {!! Form::model($permission, [ 'route'=> ['permissions.update', $permission->id], 'method' => 'PATCH']) !!}

                        @include('admin.permissions.form', ['submitButtonText' => 'Actualizar'])

                    {!! Form::close() !!}
                    
                </div><!--.panel-body-->
                
                
            </div><!--.panel-->
        </div><!--.col-md-12-->
    </div><!--.row-->
@stop
