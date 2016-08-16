@extends('layouts.masterComplete')

@section('title', 'Tipos de Documento')

@section('styles')
    @parent
    
@stop

@include('partials.tableScripts')

@section('content')
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel">
	            <div class="panel-heading">
	                <div class="panel-title"><h4>Tipos de Documento</h4></div>
	            </div><!--.panel-heading-->
	            <div class="panel-body">
	                <a href="{{ route('requestsTypes.create') }}">
	                    <button type="button" class="btn btn-success btn-ripple">Nuevo</button>
	                </a>

	                <button type="button" class="btn btn-light-blue btn-ripple">Imprimir</button>
	                <div class="row">
	                    <form action="#" class="form-horizontal parsley-validate">
	                        <div class="form-body">

	                        </div><!--.fomr-body-->
	                    </form>

	                </div><!--.row-->
					<div class="overflow-table">
							<table class="display datatables-basic" id="dataTable">
								<thead>
									<tr>
										<th>Tipo de Documento</th>	
										<th>Color</th>									
									</tr>
								</thead>
	
								<tfoot>
									<tr>
										<th>Tipo de Documento</th>
										<th>Color</th>
									</tr>
								</tfoot>

								<tbody>
									@foreach ($requestsTypes as $requestType)
									
				    					<tr>
											<td>
											<input type="hidden" id="_url" value="{{ action('RequestTypesController@edit',$requestType)}}">{{ $requestType->name }}</a>
											</td>
											<th><button type="button" class="btn btn-default btn-lg" style="background-color:{{ $requestType->color }};"></button></th>										
										</tr>
									
									@endforeach

								</tbody>
							</table>
						</div><!--.overflow-table-->
	            </div><!--.panel-body-->
	        </div><!--.panel-->
	    </div><!--.col-md-12-->
	</div><!--.row-->
		
@stop