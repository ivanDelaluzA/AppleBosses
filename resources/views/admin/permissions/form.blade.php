<div class="form-content">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('label', null, ['class' => 'form-control']) !!}
                        {!! Form::label('label', 'Etiqueta', ['class' => 'control-label']) !!}
                    </div>
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
                <a href="{{ route('permissions.create') }}" class="btn btn-primary">Nuevo</a>
                <a href="{{ route('permissions.index') }}" class="btn btn-warning">Regresar</a>
            @endif
        </div>
    </div>
</div>


