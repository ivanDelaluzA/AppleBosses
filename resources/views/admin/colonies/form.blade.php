<div class="form-content">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('zip', null, ['class' => 'form-control']) !!}
                        {!! Form::label('zip', 'Codigo Postal', ['class' => 'controlv-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('settlement_type_id', 'Tipo de Asentamiento', ['class' => 'control-label']) !!}
                <div class="input-wrapper">
                  {!! Form::select('settlement_type_id', $settlements , null, ['class' => 'select2 form-control', 'style' => 'width:100%;']) !!}
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('colony_scope_id', 'Ámbito', ['class' => 'control-label']) !!}
                <div class="input-wrapper">
                  {!! Form::select('colony_scope_id', $scopes, null, ['class' => 'js-example-basic-single form-control', 'style' => 'width: 100%']) !!}
                </div>
            </div><!--.form-group-->
        </div>
    </div>
</div><!--.form-content-->

<div class="form-buttons form-group clearfix">
    <div class="row">
        <div class="col-md-12">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
            @unless(isset($onlySaveButton) && $onlySaveButton)
                <a href="{{ route('colonies.create') }}" class="btn btn-primary">Nuevo</a>
                <a href="{{ route('colonies.index') }}" class="btn btn-warning">Regresar</a>
            @endif
        </div>
    </div>
</div>
