@extends('layouts.app')

@section('htmlheader_title', 'Editar marca')

@section('main-content')

<div class="row">
<div class="col-md-10 col-md-offset-1 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Editar marca</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.marcas.update', $marca ], 'method' => 'PUT' ])  !!}
        <div class="form-group">
            {!! Form::label('marca', 'Marca') !!}
            {!! Form::text('marca',$marca->marca, ['class' => 'form-control',
            'placeholder' => 'Marca', 'required']) !!}
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
