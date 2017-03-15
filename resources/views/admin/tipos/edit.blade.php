@extends('layouts.app')

@section('htmlheader_title', 'Editar tipo')

@section('main-content')

<div class="row">
<div class="col-md-10 col-md-offset-1 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Editar tipo</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.tipos.update', $tipo ], 'method' => 'PUT' ])  !!}
        <div class="form-group">
            {!! Form::label('tipo', 'Tipo') !!}
            {!! Form::text('tipo',$tipo->tipo, ['class' => 'form-control',
            'placeholder' => 'Tipo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::text('descripcion',$tipo->descripcion, ['class' => 'form-control',
            'placeholder' => 'Descripción', 'required']) !!}
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
