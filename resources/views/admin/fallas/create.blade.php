@extends('layouts.app')

@section('htmlheader_title', 'Agregar falla')

@section('main-content')

<div class="row">
<div class="col-md-12 ">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('admin.fallas.index')}}" class="btn btn-danger">
        <i class="fa fa-reply" aria-hidden="true"></i> Regresar
      </a>
    </div>
  </div>
  <br>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Agregar falla</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.fallas.store', 'method' => 'POST' ])  !!}
      <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('falla', 'Falla') !!}
            {!! Form::text('falla',null, ['class' => 'form-control',
            'placeholder' => 'Falla', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::text('descripcion',null, ['class' => 'form-control',
            'placeholder' => 'Descripción', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idTipoFK', 'Tipo') !!}
            {!! Form::select('idTipoFK', $tipos, null, ['class' => 'form-control',
                'placeholder' => 'selecione una opción...', 'required'  ]) !!}
              {{--{!! Form::button('+', ['class' => 'btn btn-primary']) !!}--}}
        </div>
        <div class="form-group">
            {!! Form::label('caracteristicas', 'Caracteristicas:') !!}
            {!! Form::text('caracteristica1',null, ['class' => 'form-control',
            'placeholder' => 'caracteristica1', 'required']) !!}
            <br>
            {!! Form::text('caracteristica2',null, ['class' => 'form-control',
            'placeholder' => 'caracteristica2', 'required']) !!}
            <br>
            {!! Form::text('caracteristica3',null, ['class' => 'form-control',
            'placeholder' => 'caracteristica3']) !!}
        </div>
      </div>
      <div class="col-md-4">

        <div class="form-group">
            {!! Form::label('causas', 'Causa 1') !!}
            {!! Form::text('causa1',null, ['class' => 'form-control',
            'placeholder' => 'causa 1', 'required']) !!}
            <br>
            {!! Form::text('descripcionCausa1',null, ['class' => 'form-control',
            'placeholder' => 'descripcion Causa 1', 'required']) !!}
            <br>
            {!! Form::label('causas', 'Causa 2') !!}
            {!! Form::text('causa2',null, ['class' => 'form-control',
            'placeholder' => 'causa 2']) !!}
            <br>
            {!! Form::text('descripcionCausa2',null, ['class' => 'form-control',
            'placeholder' => 'descripcion Causa 2']) !!}
            <br>
            {!! Form::label('causas', 'Causa 3') !!}
            {!! Form::text('causa3',null, ['class' => 'form-control',
            'placeholder' => 'causa 3']) !!}
            <br>
            {!! Form::text('descripcionCausa3',null, ['class' => 'form-control',
            'placeholder' => 'descripcion Causa 3']) !!}

        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('sugerencias', 'Sugerencia 1') !!}
            {!! Form::text('sugerencia1',null, ['class' => 'form-control',
            'placeholder' => 'sugerencia 1', 'required']) !!}
            <br>
            {!! Form::text('descripcionSugerencia1',null, ['class' => 'form-control',
            'placeholder' => 'descripcion Sugerencia 1', 'required']) !!}
            <br>
            {!! Form::label('sugerencias', 'Sugerencia 2') !!}
            {!! Form::text('sugerencia2',null, ['class' => 'form-control',
            'placeholder' => 'sugerencia 2']) !!}
            <br>
            {!! Form::text('descripcionSugerencia2',null, ['class' => 'form-control',
            'placeholder' => 'descripcion Sugerencia 2']) !!}
            <br>
            {!! Form::label('sugerencias', 'Sugerencia 3') !!}
            {!! Form::text('sugerencia3',null, ['class' => 'form-control',
            'placeholder' => 'sugerencia 3']) !!}
            <br>
            {!! Form::text('descripcionSugerencia3',null, ['class' => 'form-control',
            'placeholder' => 'descripcion Sugerencia 3']) !!}
        </div>
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
