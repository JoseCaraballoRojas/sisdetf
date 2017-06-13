@extends('layouts.app')

@section('htmlheader_title', 'Diagnosticar falla video')

@section('main-content')

<div class="row">
  <div class="col-md-9">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="form-signin-heading text-center"><b>Diagnosticar falla de video</b></h3>
      </div>
      <div class="panel-body">
        {!! Form::open(['route' => 'admin.motor.store', 'method' => 'POST' ])  !!}
          {{ Form::hidden('tipo', 'escritorio', ['id' => 'tipoEquipo']) }}
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">

          <div class="col-md-9">
            <div class="row">    
              <div class="col-md-12">
                @foreach($fallas2 as $falla)
                {{ Form::hidden('id', $falla->id, ['id' => 'id_falla']) }}
                {{ Form::hidden('tipoFalla', $falla->idTipoFK, ['id' => 'tipoFalla']) }}
                <div class="col-md-12">
                  <div class="form-group text-center h4">
                    {!! Form::label('pregunta',  $falla->pregunta, ['id' =>  'pregunta']) !!}
                  </div>
                </div>
                  <div class="caracteristica">
                    <div class="col-md-6">
                      <div class="form-group text-primary">
                        {!! Form::label('caracteristicas',  'Caracateristicas:') !!}
                      </div>
                      <div class="form-group ">
                        {!! Form::label('caracteristica1',  $falla->caracteristicas[0]->caracteristica) !!}
                      </div>
                      <div class="form-group ">                      
                        @if($falla->caracteristicas[1]->caracteristica)
                          {!! Form::label('caracteristica2',  $falla->caracteristicas[1]->caracteristica) !!}
                        
                      </div>
                      <div class="form-group ">                      
                        @elseif($falla->caracteristicas[2]->caracteristica)
                          {!! Form::label('caracteristica2',  $falla->caracteristicas[2]->caracteristica) !!}
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="form-group text-success">
                        {!! Form::label('sugerencias',  'Sugerencias:') !!}
                      </div>
                      <div class="form-group ">
                        {!! Form::label('solucion1',  $falla->soluciones[0]->solucion) !!}
                      </div>
                    </div>
                    @endforeach
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group text-center">
                    {!! Form::label('si', 'Si', ['class' => 'h4']) !!}
                    {!! Form::radio('respuesta', 'si') !!}
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group text-center">
                    {!! Form::label('no', 'No', ['class' => 'h4']) !!}
                    {!! Form::radio('respuesta', 'no') !!}
                </div>
              </div>
              <div class="col-md-6 solucion">
                  <div class="form-group text-success h4">
                    {!! Form::label('sugerencia',  'Posible solucion:') !!}
                  </div>
                  <div class="form-group ">
                    {!! Form::label('solucion1', '*'.$falla->soluciones[0]->solucion) !!}
                  </div>
              </div>
            </div>
            {!! Form::close() !!}

            <div class="row guardar">
            {!! Form::open(['route' => 'admin.motor.guardar', 'method' => 'POST' ])  !!}
               {{ Form::hidden('tipo', 'escritorio') }}
                @foreach($fallas2 as $falla)
                  {{ Form::hidden('id', $falla->id) }}
                @endforeach
              <div class="col-md-12">
                  <div class="form-group text-center h4">
                    {!! Form::label('pregunta', 'Pudo solucionar el problema con las soluciones sugeridas ? ') !!}
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group text-center">
                    {!! Form::label('si', 'si', ['class' => 'h4']) !!}
                    {!! Form::radio('estatus', 'si') !!}
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group text-center">
                    {!! Form::label('no', 'No', ['class' => 'h4']) !!}
                    {!! Form::radio('estatus', 'no') !!}
                </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group ">
                    {!! Form::submit('Guardar Diagnostico', ['class' => 'btn btn-success']) !!}
                  </div>
              </div>
              {!! Form::close() !!}
            </div>

          </div>
          </div>
        </div>
        
    </div>
     <div class="col-md-3">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="form-signin-heading text-center"><b>Sugerencias de Fallas</b></h3>
      </div>
      <div class="panel-body">
          <div class="col-md-12">
            <table class="table table-striped text-center">
            <thead>
                <th>Falla</th>
            </thead>
            <tbody>
            @if (count($fallas))
                @foreach($fallas as $falla)
                    <tr>
                        <td>{{ $falla->falla }}</td>
                    </tr>
                @endforeach
            @else
                  <tr>
                      <td colspan="5"><em>No hay sugerencias de fallas </em></td>
                  </tr>
              @endif
            </tbody>
          </table>
          <div class="text-center">
            {!! $fallas->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
{!! Form::open(['route' => 'admin.motor.siguienteFalla', 'method' => 'POST' ])  !!}
    {{ Form::hidden('id', $falla->id, ['id' => 'id_Falla']) }}
    {{ Form::hidden('tipoFalla', $falla->idTipoFK, ['id' => 'tipo_Falla']) }}
    {{ Form::hidden('tipoEquipo', 'escritorio', ['id' => 'tipo_Equipo']) }}
    {{ Form::hidden('url', 'admin.motor.diagnoticarFallaElectrica') }}
    {!! Form::submit('siguiente', ['id' => 'btnSiguienteFalla']) !!}
{!! Form::close() !!}
 
</div>

@endsection
