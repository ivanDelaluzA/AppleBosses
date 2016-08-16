
<div class="tab-pane" id="tipo">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<div class="radioer radioer-green form-inline">
					<input type="radio" name="docOption" id="radioRecidencia" value="residencia">
					<label style="" for="radioRecidencia"> <legend class="text-danger">Recidencia </legend></label>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<div class="radioer radioer-green form-inline">
					<input type="radio" name="docOption" id="radioConducta" value="conducta" checked="checked" >
					<label for="radioConducta"><legend class="text-danger">Buena Conducta</legend></label>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<div class="radioer radioer-green form-inline">
					<input type="radio" name="docOption" id="radioAsentamiento" value="registro" >
					<label for="radioAsentamiento"><legend class="text-danger">Asentamiento del Registro Civil</legend></label>
				</div>
			</div>
		</div>


	</div>
</div>

<!--.tab-pane-->

<div class="tab-pane" id="jefe">

	<div class="row">
		<div id="map"></div>
		<input type="text" id="lat" hidden>
		<input type="text" id="lng" hidden>
		<input type="text" id="number" hidden>
		<input type="text" id="route" hidden>
		<input type="text" id="sublocality" hidden>
	</div>
</div>
<!--.tab-pane-->

<div class="tab-pane" id="datos">
	<div class="row">
		<legend class="text-danger">Proporcioname tus datos</legend>
		<div class="row">
			<div class="col-md-3">
				<label class="text-green">
					EL (LA) CIUDADANO(A)
				</label>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							{!! Form::text('name', null, ["class" => "form-control", "required","maxlength" =>"20","placeholder" =>"Nombre"]) !!}
							@if($errors->has('name'))
							<span class="badge">{{ $errors->first('name') }}</span>
							@endif
						</div>
					</div>
				</div><!--.form-group-->
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							{!! Form::text('lastname01', null, ["class" => "form-control", "required","maxlength" =>"15","placeholder" =>"Apellido Materno"]) !!}
							@if($errors->has('lastname01'))
							<span class="badge">{{ $errors->first('lastname01') }}</span>
							@endif
						</div>
					</div>
				</div><!--.form-group-->
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							{!! Form::text('lastname02', null, ["class" => "form-control", "maxlength" =>"15","required","placeholder" =>"Apellido Paterno"]) !!}
							@if($errors->has('lastname02'))
							<span class="badge">{{ $errors->first('lastname02') }}</span>
							@endif
						</div>
					</div>
				</div><!--.form-group-->
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				<label class="text-green">
					RADICA EN LA MANZANA:
				</label>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							{!! Form::number('apple', null, ["class" => "form-control", "required","maxlength" =>"4","placeholder" =>"No: "]) !!}
							@if($errors->has('apple'))
							<span class="badge">{{ $errors->first('apple') }}</span>
							@endif
						</div>
					</div>
				</div><!--.form-group-->
			</div>
			<div class="col-md-4">
				<label class="text-green">
					TENIENDO COMO DOMICILIO
				</label>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							{!! Form::text('address', null, ["class" => "form-control", "maxlength" =>"55" , "required","placeholder" =>"Av. y calles "]) !!}
							@if($errors->has('address'))
							<span class="badge">{{ $errors->first('address') }}</span>
							@endif
						</div>
					</div>
				</div><!--.form-group-->
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-2">
				<label class="text-green">
					DE LA COLONIA:
				</label>
			</div>
			<div class="col-md-5">
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							{!! Form::text('suburb', null, ["class" => "form-control", "maxlength" =>"10" ,"required","placeholder" =>"Ingrese la colonia donde recide "]) !!}
							@if($errors->has('suburb'))
							<span class="badge">{{ $errors->first('suburb') }}</span>
							@endif
						</div>
					</div>
				</div><!--.form-group-->
			</div>
			<div class="col-md-1">
				<label class="text-green">
					SECCION:
				</label>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							{!! Form::number('seccion', null, ["class" => "form-control","maxlength" =>"5" , "required","placeholder" =>"  No. Seccion"]) !!}
							@if($errors->has('seccion'))
							<span class="badge">{{ $errors->first('seccion') }}</span>
							@endif
						</div>
					</div>
				</div><!--.form-group-->
			</div>
		</div>
	</div>
</div>

<div class="tab-pane" id="razon">
	<div class="row">
		<legend class="text-danger">Utilizare este documento para:</legend>
		<div class="col-sm-offset-2 col-md-8">
			<div class="form-group">
				<div class="inputer">
					<div class="input-wrapper">
						{!! Form::textarea('reason',null, ["class" => "form-control","required","maxlength" =>"140" , "placeholder" =>" Describe brevemente para que será untilizada esta constancia "]) !!}
						@if($errors->has('reason'))
						<small>{{ $errors->first('reason') }}</small>
						@endif
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="tab-pane" id="finalizar">
	<div class="row">
		<legend class="text-danger">A PETICION DE LA PARTE INTEREZADA Y PARA LOS USOS LEGALES A QUE HAYA LUGAR, SE EXPIDE LA PRESENTE EN LA HEROICA CIUDAD DE CORDOBA, VERACRUZ. <BR>
			A LOS 
			<li class="bs-wizard-submit pull-right">
				<button type="submit" class="btn btn-light-green">Terminar 
					<i class="fa fa-check-circle">
					</i></button></li>
				</div>
			</div>