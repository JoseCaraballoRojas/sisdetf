@extends('layouts.app')

@section('htmlheader_title', 'Editar Usuario: ' . $usuario->nombre . '  '.$usuario->apellido)

@section('main-content')
<div class="row">
<div class="col-md-10 col-md-offset-1 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Crear Usuario</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.usuarios.update', $usuario ], 'method' => 'PUT' ])  !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre',$usuario->nombre, ['class' => 'form-control',
            'placeholder' => 'Nombre', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('apellido', 'Apellido') !!}
            {!! Form::text('apellido',$usuario->apellido, ['class' => 'form-control',
            'placeholder' => 'Apellido', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cedula', 'Cedula') !!}
            {!! Form::text('cedula',$usuario->cedula, ['class' => 'form-control',
            'placeholder' => 'Cedula de identidad', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('usuario', 'Usuario') !!}
            {!! Form::text('usuario',$usuario->usuario, ['class' => 'form-control',
            'placeholder' => 'Usuario', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tipo', 'Tipo') !!}
            {!! Form::select('tipo',['' => 'Seleccione...', 'administrador' => 'Administrador', 'operador' => 'Operador'],
            null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="panel-footer">
        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>
@endsection
