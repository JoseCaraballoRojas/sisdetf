@extends('layouts.app')

@section('htmlheader_title', 'Consultar Arranque')

@section('main-content')

<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Diagnostico</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.motor.fallaArranque', 'method' => 'POST' ])  !!}
       {{ Form::hidden('tipo', 'escritorio') }}
      <div class="col-md-12" >
        <h3 class="form-signin-heading text-center"><b>El Equipo Puede Aarrancar el Sistema Operativo ? </b></h3>
      </div>
      <div class="col-md-6">
        <div class="form-group text-center">
            {!! Form::label('si', 'Si', ['class' => 'h2']) !!}
            {!! Form::radio('arranque', 'si', ['required']) !!}
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group text-center">
            {!! Form::label('no', 'No', ['class' => 'h2']) !!}
            {!! Form::radio('arranque', 'no') !!}
        </div>
      </div>

    </div>
    <div class="panel-footer">
        <div class="form-group">
            {!! Form::submit('Diagnosticar', ['class' => 'btn btn-success']) !!}
        </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>

@endsection
