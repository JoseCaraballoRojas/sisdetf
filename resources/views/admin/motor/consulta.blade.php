@extends('layouts.app')

@section('htmlheader_title', 'Consultar')

@section('main-content')

<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="form-signin-heading text-center"><b>Diagnostico</b></h3>
  </div>
  <div class="panel-body">
    {!! Form::open(['route' => 'admin.motor.store', 'method' => 'POST' ])  !!}
    <div class="col-md-12 primer_form">
      <h3 class="form-signin-heading text-center"><b>Seleccione el Tipo de Equipo: </b></h3>
    </div>

      <div class="col-md-5 col-md-offset-1 primer_form">
        <div class="image">
          <a href="#" id="imgEscritorio">
            <img src="{{asset('/img/escritorio.jpg')}}" class="img" alt="escritorio Image"/>
          </a>
        </div>
        <div class="form-group radios">
            {!! Form::text('tipo', null, ['required', 'id' => 'tipoEquipoFalla' ]) !!}
            {{-- !! Form::label('escritorio', 'Escritorio', ['class' => 'h3']) !!}
            {!! Form::radio('tipo', 'escritorio', ['required', 'id' => 'radioEscritorio']) !!} --}}
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1 primer_form">
        <div class="image">
          <a href="#" id="imgPortatil">
            <img src="{{asset('/img/laptop.jpg')}}" class="img" alt="laptop Image" />
          </a>
        </div>
        <div class="form-group radios">
            {{-- {!! Form::label('portatil', 'Portatil', ['class' => 'h3']) !!}
            {!! Form::radio('tipo', 'portatil', ['id' => 'radioPortatil']) !!} --}}
        </div>
      </div>

      <div class="col-md-12 segundo_form" >
        <h3 class="form-signin-heading text-center"><b>El Equipo Enciende: </b></h3>
      </div>
      <div class="col-md-6 segundo_form">
        <div class="form-group text-center">
            {!! Form::label('si', 'Si', ['class' => 'h2']) !!}
            {!! Form::radio('enciende', 'si', ['required']) !!}
        </div>
      </div>
      <div class="col-md-6 segundo_form">
        <div class="form-group text-center">
            {!! Form::label('no', 'No', ['class' => 'h2']) !!}
            {!! Form::radio('enciende', 'no') !!}
        </div>
      </div>

    </div>
    <div class="panel-footer botones">
        <div class="form-group">
            {!! Form::button('Atras', ['class' => 'btn btn-danger', 'id' => 'btn_atras']) !!}
            {!! Form::submit('Diagnosticar', ['class' => 'btn btn-success', 'id' => 'btn_submit']) !!}
            {!! Form::button('Siguiente', ['class' => 'btn btn-primary', 'id' => 'btn_primero']) !!}
        </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>

@endsection
