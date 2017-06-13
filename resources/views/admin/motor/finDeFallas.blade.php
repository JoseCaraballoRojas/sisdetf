@extends('layouts.app')

@section('htmlheader_title', 'Diagnosticar falla electrica')

@section('main-content')

<div class="row">
  <div class="col-md-9">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="form-signin-heading text-center"><b>Falla no resuelta</b></h3>
      </div>
      <div class="panel-body">
        <div class="form-group ">
          {!! Form::label('informacion', 
          'Informacion: ha llegado al final de las sugerencias de fallas registradas 
           el administrador sera informado para que le brinde una solucion a su falla') !!}
        </div>
        <div class="row guardar">
            {!! Form::open(['route' => 'admin.motor.guardar', 'method' => 'POST' ])  !!}
               {{ Form::hidden('tipo', 'escritorio') }}
               {{ Form::hidden('id', '3') }}
               {{ Form::hidden('estatus', 'no') }}
        </div>
            <div class="form-group ">
              {!! Form::submit('Guardar Informe', ['class' => 'btn btn-success']) !!}
            </div>
             
            {!! Form::close() !!}
          </div>
      </div>
    </div>   
  </div>

@endsection
