@extends('layouts.app')

@section('htmlheader_title', 'Agregar marca')

@section('main-content')
<div class="row">
<div class="col-md-12 ">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('admin.marcas.index')}}" class="btn btn-danger">
        <i class="fa fa-reply" aria-hidden="true"></i> Regresar
      </a>
    </div>
  </div>
  <br>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Agregar marca</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.marcas.store', 'method' => 'POST' ])  !!}
        <div class="form-group">
            {!! Form::label('marca', 'Marca') !!}
            {!! Form::text('marca',null, ['class' => 'form-control',
            'placeholder' => 'Marca', 'required']) !!}
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
