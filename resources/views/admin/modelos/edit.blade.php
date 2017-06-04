@extends('layouts.app')

@section('htmlheader_title', 'Editar modelo')

@section('main-content')

<div class="row">
<div class="col-md-12">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('admin.modelos.index')}}" class="btn btn-danger">
        <i class="fa fa-reply" aria-hidden="true"></i> Regresar
      </a>
    </div>
  </div>
  <br>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Editar modelo</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.modelos.update', $modelo ], 'method' => 'PUT' ])  !!}
        <div class="form-group">
            {!! Form::label('modelo', 'Modelo') !!}
            {!! Form::text('modelo',$modelo->modelo, ['class' => 'form-control',
            'placeholder' => 'Modelo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idMarcaFK', 'Marca') !!}
            {!! Form::select('idMarcaFK', $marcas, $modelo->marca->id, ['class' => 'form-control',
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
