@extends('layouts.masterComplete')

@section('title', 'Jefes de Manzana')

@section('styles')
    @parent
@stop

@include('partials.tableScripts')

@section('content')
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel">

					<div class="panel-heading">
						<div class="panel-title"><h4>JEFES DE MANZANA EN CORDOBA VERACRUZ</h4></div>
					</div><!--.panel-heading-->
					<div class="panel-body">
						<div class="form-buttons form-group clearfix">
						    <div class="row">
						        <div class="col-md-12">
						            
						                <a href="{{ route('appleBosses.create') }}" class="btn btn-primary">Nuevo</a>
						            
						        </div>
						    </div>
						</div>
						<div class="overflow-table">
							<table class="display datatables-basic" id="dataTable">
								<thead>
									<tr>
										<th>Nombre </th>
										<th>Colonia</th>
									</tr>
								</thead>
	
								<tfoot>
									<tr>
										<th>Nombre </th>
										<th>Colonia</th>
									</tr>
								</tfoot>

								<tbody>
									@foreach ($appleBosses as $appleBoss)
									
				    					<tr>
				    						<td><input type="hidden" id="_url" value="{{ action('AppleBossesController@edit',$appleBoss)}}">
				    						{{ $appleBoss->personalInformation->name.'  '.$appleBoss->personalInformation->paternal_surname.'  '.$appleBoss->personalInformation->maternal_surname }}
												</a></td>
											<td>
												colonia
											</td>										
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