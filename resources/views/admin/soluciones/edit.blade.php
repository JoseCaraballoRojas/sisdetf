@extends('layouts.app')

@section('htmlheader_title', 'Editar sugerencia de una falla')

@section('main-content')

<div class="row">
<div class="col-md-10 col-md-offset-1 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Editar sugerencia de una falla</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => ['admin.soluciones.update', $solucion ], 'method' => 'PUT' ])  !!}
        <div class="form-group">
            {!! Form::label('solucion', 'Sugerencia') !!}
            {!! Form::text('solucion',$solucion->solucion, ['class' => 'form-control',
            'placeholder' => 'Sugerencia', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::text('descripcion',$solucion->descripcion, ['class' => 'form-control',
            'placeholder' => 'Descripción', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idFallaFK', 'Falla') !!}
            {!! Form::select('idFallaFK', $fallas, $solucion->falla->id, ['class' => 'form-control',
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
