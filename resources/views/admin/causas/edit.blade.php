@extends('layouts.app')

@section('htmlheader_title', 'Editar causa de una falla')

@section('main-content')

<div class="row">
<div class="col-md-12">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('admin.causas.index')}}" class="btn btn-danger">
        <i class="fa fa-reply" aria-hidden="true"></i> Regresar
      </a>
    </div>
  </div>
  <br>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Editar causa de una falla</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.causas.update', $causa ], 'method' => 'PUT' ])  !!}
        <div class="form-group">
            {!! Form::label('causa', 'Causa') !!}
            {!! Form::text('causa',$causa->causa, ['class' => 'form-control',
            'placeholder' => 'Causa', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::text('descripcion',$causa->descripcion, ['class' => 'form-control',
            'placeholder' => 'Descripción', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idFallaFK', 'Falla') !!}
            {!! Form::select('idFallaFK', $fallas, $causa->falla->id, ['class' => 'form-control',
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
