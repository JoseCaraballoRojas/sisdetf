@extends('admin.template.main')

@section('titulo', 'Crear Usuario')

@section('contenido')
    
<div class="row">
<div class="col-md-10 col-md-offset-1 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Crear Usuario</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.usuarios.store', 'method' => 'POST' ])  !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre',null, ['class' => 'form-control',
            'placeholder' => 'Nombre', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('apellido', 'Apellido') !!}
            {!! Form::text('apellido',null, ['class' => 'form-control',
            'placeholder' => 'Apellido', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cedula', 'Cedula') !!}
            {!! Form::text('cedula',null, ['class' => 'form-control',
            'placeholder' => 'Cedula de identidad', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('usuario', 'Usuario') !!}
            {!! Form::text('usuario',null, ['class' => 'form-control',
            'placeholder' => 'Usuario', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control',
            'placeholder' => '**********', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tipo', 'Tipo') !!}
            {!! Form::select('tipo',['' => 'Seleccione...', 'administrador' => 'Administrador', 'operador' => 'Operador'],
            null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="panel-footer">
        <div class="form-group">
            {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>
@endsection
