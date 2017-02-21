@extends('admin.template.main')

@section('titulo', 'Registrar Equipo')

@section('contenido')

<div class="row">
<div class="col-md-10 col-md-offset-1 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Registrar Equipo</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.equipos.store', 'method' => 'POST' ])  !!}

        <div class="form-group">
            {!! Form::label('equipo', 'Equipo') !!}
            {!! Form::text('equipo',null, ['class' => 'form-control',
            'placeholder' => 'Equipo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idMarcaFK', 'Marca') !!}
            {!! Form::select('idMarcaFK', $marcas, null, ['class' => 'form-control',
                'placeholder' => 'selecione una opción...', 'required'  ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idModeloFK', 'Modelo') !!}
            {!! Form::select('idModeloFK', $modelos, null, ['class' => 'form-control',
                'placeholder' => 'selecione una opción...', 'required'  ]) !!}
        </div>

    </div>
    <div class="panel-footer">
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>
@endsection
