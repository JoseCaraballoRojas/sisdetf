@extends('admin.template.main')

@section('titulo', 'Agregar caracteristica de una falla')

@section('contenido')

<div class="row">
<div class="col-md-10 col-md-offset-1 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Agregar caracteristica de una falla</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.caracteristicas.store', 'method' => 'POST' ])  !!}

        <div class="form-group">
            {!! Form::label('caracteristica', 'Caracteristica') !!}
            {!! Form::text('caracteristica',null, ['class' => 'form-control',
            'placeholder' => 'Caracteristica', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idFallaFK', 'Falla') !!}
            {!! Form::select('idFallaFK', $fallas, null, ['class' => 'form-control',
                'placeholder' => 'selecione una opción...', 'required'  ]) !!}
        </div>


    </div>
    <div class="panel-footer">
        <div class="form-group">
            {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>
@endsection
