<div class="form-content">
 @include('errors.list')
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        {!! Form::label('name', 'Nombre'), ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::text('paternal_surname', null, ['class' => 'form-control']) !!}
                        {!! Form::label('paternal_surname', 'Apellido Paterno', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-3">
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
                {!! Form::label('sex', 'Sexo', ['class' => 'control-label']) !!}
                <div class="input-wrapper">
                    {!! Form::select('sex', ["f" => 'Femenino', "m" => 'Masculino'], null, ['class' => 'select2 form-control', 'style' => 'width: 100%']) !!}
                </div>
            </div><!--.form-group-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::password('password', ['id' => 'password', 'class' => 'form-control']) !!}
                    {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'form-control']) !!}
                        {!! Form::label('password_confirmation', 'Confirmar Contraseña', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="inputer floating-label">
                    <div class="input-wrapper">
                        {!! Form::email('sub_email', null, ['class' => 'form-control']) !!}
                        {!! Form::label('sub_email', 'Email Alternativo', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div><!--.form-group-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('is_active', 'Estado', ['class' => 'control-label']) !!}
                <div class="input-wrapper">
                    {!! Form::select('is_active', [1 => 'Activo', 0 => 'Inactivo'], null, ['class' => 'select2 form-control', 'style' => 'width: 100%']) !!}
                </div>
            </div><!--.form-group-->
        </div>
        <div class="col-md-3">
            <!-- roles -->
            <div class="form-group">
                {!! Form::label('role_id','Roles', ['class' => 'control-label']) !!}
                <div class="input-wrapper">
                    {!! Form::select('role_id', $roles, null, ['class' => 'select2 form-control', 'style' => 'width: 100%']) !!}
                </div>
            <!--.form-group-->
            </div>
        </div>
    </div>
</div><!--.form-content-->

<div class="form-buttons form-group clearfix">
    <div class="row">
        <div class="col-md-12">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
            <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo</a>
            <a href="{{ route('users.index') }}" class="btn btn-warning">Regresar</a>
        </div>
    </div>
</div>
