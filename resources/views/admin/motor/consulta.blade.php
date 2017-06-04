@extends('layouts.app')

@section('htmlheader_title', 'Consultar')

@section('main-content')

<div class="row">
<div class="col-md-10 col-md-offset-1 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Diagnostico</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.motor.store', 'method' => 'POST' ])  !!}
      <div class="col-md-5 col-md-offset-1">
        <div class="image">
            <img src="{{asset('/img/escritorio.jpg')}}" class="img" alt="escritorio Image" />
        </div>
        <div class="form-group">
            {!! Form::label('escritorio', 'Escritorio', ['class' => 'h3']) !!}
            {!! Form::radio('tipo', 'escritorio') !!}
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1">
        <div class="image">
            <img src="{{asset('/img/laptop.jpg')}}" class="img" alt="laptop Image" />
        </div>
        <div class="form-group">
            {!! Form::label('portatil', 'Portatil', ['class' => 'h3']) !!}
            {!! Form::radio('tipo', 'portatil') !!}
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
