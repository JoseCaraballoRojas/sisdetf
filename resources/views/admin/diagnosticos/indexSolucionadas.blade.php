@extends('layouts.app')

@section('htmlheader_title', 'Lista de diagnosticos registradas')

@section('main-content')
<div class="row">
  <div class="col-md-12 ">
    <table class="table table-striped ">
        <thead>
            <th>Falla</th>
            <th>Tipo de Equipo</th>
            <th>Estatus</th>
            <th>Usuario</th>
            <th>Fecha</th>
            <th>Hora</th>
        </thead>
        <tbody>
          @if (count($diagnosticos))
            @foreach($diagnosticos as $diagnostico)
                <tr>
                    <td>{{ $diagnostico->falla->falla }}</td>
                    <td>{{ $diagnostico->tipo }}</td>
                    <td class="text-success">
                      {{ $diagnostico->estatus }}
                    </td>
                    <td>{{ $diagnostico->usuario }}</td>
                    <td>{{ $diagnostico->created_at->format('Y-m-d') }}</td>
                    <td>{{ $diagnostico->created_at->format('H:m:s') }}</td>
                </tr>
            @endforeach
          @else
              <tr>
                  <td colspan="6"><em>No hay diagnosticos registrados en la base de datos</em></td>
              </tr>
          @endif
        </tbody>
    </table>
    <div class="text-center">
      {!! $diagnosticos->render() !!}
    </div>
  </div>
</div>
@endsection
