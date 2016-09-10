@include('errors.list')
<small>Todos los campos marcados con <i class="fa fa-asterisk" aria-hidden="true" style="color:blue"></i> son requeridos.</small>
<div class="form-content"> 
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">  
                <div class="inputer floating-label">
                     <div class="input-wrapper">
                         {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        {!! Form::label('name', 'Nombre', ['class' => 'control-label require-asterisk']) !!}
                    </div> 
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-2"> 
            <div class="form-group">
                <div class="inputer floating-label">
                     <div class="input-wrapper">
                        {!! Form::text('paternal_surname', null, ['class' => 'form-control']) !!}
                        {!! Form::label('paternal_surname', 'Apellido Paterno', ['class' => 'control-label require-asterisk']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('maternal_surname', null, ['class' => 'form-control']) !!}
                        {!! Form::label('maternal_surname', 'Apellido Materno', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::label('sex', 'Sexo', ['class' => 'control-label require-asterisk']) !!}
                <div class="input-wrapper">
                    {!! Form::select('sex', ["F" => 'Femenino', "M" => 'Masculino'], null, ['class' => 'select2 form-control', 'style' => 'width: 100%']) !!}
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('birthday', 'Fecha de Nacimiento', ['class' => 'control-label']) !!}
                <div class="inputer">
                    <div class="input-wrapper">
                        {!! Form::input('date', 'birthday', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        {!! Form::label('email', 'email', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('house_phone', null, ['class' => 'form-control']) !!}
                        {!! Form::label('house_phone', 'Telefono de Casa', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('mobile_phone', null, ['class' => 'form-control']) !!}
                        {!! Form::label('mobile_phone', 'Telefono Movil', ['class' => 'control-label require-asterisk']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('section', null, ['class' => 'form-control']) !!}
                        {!! Form::label('section', 'Seccion', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('block', null, ['class' => 'form-control']) !!}
                        {!! Form::label('block', 'Manzana', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::textarea('street', null, ['class' => 'form-control', 'rows' => '2']) !!}
                        {!! Form::label('street', 'Calle', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('number', null, ['class' => 'form-control']) !!}
                        {!! Form::label('number', 'Num. Ext', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('interior', null, ['class' => 'form-control']) !!}
                        {!! Form::label('interior', 'Num. Int', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('colony_id', 'Colonia', ['class' => 'control-label require-asterisk']) !!}
                <div class="input-wrapper">
                    {!! Form::select('colony_id', $colonies, null, ['class'=>'select2','colony_citizen','style' => 'width: 100%']) !!}
                </div>
            </div><!--.form-group-->
        </div>
    </div>
</div><!--.form-content-->

<div class="form-buttons form-group clearfix">
    <div class="row">
        <div class="col-md-12">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-success', 'id' => '#editAppleBossesForm']) !!}
            @unless(isset($onlySaveButton) && $onlySaveButton)
                <a href="{{ route('appleBosses.create') }}" class="btn btn-primary">Nuevo</a>
                <a href="{{ route('appleBosses.index') }}" class="btn btn-warning">Regresar</a>
            @endif
        </div>
    </div>
</div>
