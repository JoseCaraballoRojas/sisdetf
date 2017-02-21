@extends('admin.template.main')

@section('titulo', 'Editar falla')

@section('contenido')

<div class="row">
<div class="col-md-10 col-md-offset-1 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Editar falla</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.fallas.update', $falla ], 'method' => 'PUT' ])  !!}
        <div class="form-group">
            {!! Form::label('falla', 'Falla') !!}
            {!! Form::text('falla',$falla->falla, ['class' => 'form-control',
            'placeholder' => 'Falla', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::text('descripcion',$falla->descripcion, ['class' => 'form-control',
            'placeholder' => 'Descripción', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idTipoFK', 'Tipo') !!}
            {!! Form::select('idTipoFK', $tipos, $falla->tipo->id, ['class' => 'form-control',
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
