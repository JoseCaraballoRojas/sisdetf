@extends('layouts.app')

@section('htmlheader_title', 'Editar caracteristica de una falla')

@section('main-content')

<div class="row">
<div class="col-md-12">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('admin.caracteristicas.index')}}" class="btn btn-danger">
        <i class="fa fa-reply" aria-hidden="true"></i> Regresar
      </a>
    </div>
  </div>
  <br>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Editar caracteristica de una falla</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.caracteristicas.update', $caracteristica ], 'method' => 'PUT' ])  !!}
        <div class="form-group">
            {!! Form::label('caracteristica', 'Caracteristica') !!}
            {!! Form::text('caracteristica',$caracteristica->caracteristica, ['class' => 'form-control',
            'placeholder' => 'Caracteristica', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idFallaFK', 'Falla') !!}
            {!! Form::select('idFallaFK', $fallas, $caracteristica->falla->id, ['class' => 'form-control',
                'placeholder' => 'selecione una opción...', 'required'  ]) !!}
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
