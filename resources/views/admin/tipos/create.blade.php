@extends('layouts.app')

@section('htmlheader_title', 'Agregar un tipo de fallas')

@section('main-content')

<div class="row">
<div class="col-md-12">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('admin.tipos.index')}}" class="btn btn-danger">
        <i class="fa fa-reply" aria-hidden="true"></i> Regresar
      </a>
    </div>
  </div>
  <br>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Agregar un tipo de falla</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.tipos.store', 'method' => 'POST' ])  !!}
        <div class="form-group">
            {!! Form::label('tipo', 'Tipo') !!}
            {!! Form::text('tipo',null, ['class' => 'form-control',
            'placeholder' => 'Tipo de falla', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::text('descripcion',null, ['class' => 'form-control',
            'placeholder' => 'Descripción', 'required']) !!}
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
