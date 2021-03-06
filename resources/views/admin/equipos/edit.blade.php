@extends('layouts.app')

@section('htmlheader_title', 'Editar modelo')

@section('main-content')

<div class="row">
<div class="col-md-12 ">
  <a href="{{ route('admin.equipos.index')}}" class="btn btn-danger">
    <i class="fa fa-reply" aria-hidden="true"></i> Regresar
  </a>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Editar equipo</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.equipos.update', $equipo], 'method' => 'PUT' ])  !!}
        <div class="form-group">
            {!! Form::label('equipo', 'Equipo') !!}
            {!! Form::text('equipo',$equipo->equipo, ['class' => 'form-control',
            'placeholder' => 'Equipo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idMarcaFK', 'Marca') !!}
            {!! Form::select('idMarcaFK', $marcas, $equipo->modelo->marca->id, ['class' => 'form-control',
                'placeholder' => 'selecione una opción...', 'required'  ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idModeloFK', 'Modelo') !!}
            {!! Form::select('idModeloFK', $modelos, $equipo->modelo->id, ['class' => 'form-control',
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
