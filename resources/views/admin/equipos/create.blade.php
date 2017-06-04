@extends('layouts.app')

@section('htmlheader_title', 'Registrar Equipo')

@section('main-content')

<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <a href="{{ route('admin.equipos.index')}}" class="btn btn-danger">
          <i class="fa fa-reply" aria-hidden="true"></i> Regresar
        </a>
      </div>
    </div>
    <br>
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
              <button type="submit" name="registrar" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Registrar
              </button>
              <!--{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}-->
          </div>
      {!! Form::close() !!}
    </div>
  </div>
  </div>
</div>
@endsection
