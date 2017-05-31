@extends('layouts.app')

@section('htmlheader_title')
	Historial de acciones de los usuarios en el sistema
@endsection

@section('main-content')
<div class="row">
  <div class="col-md-12 ">

    <table class="table table-striped ">
        <thead>
            <th>Usuario</th>
            <th>Acción</th>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Hora</th>
        </thead>
        <tbody>
          @if (count($historiales))
            @foreach($historiales as $historial)
                <tr>
                    <td>{{ $historial->usuario->usuario }}</td>
                    <td>{{ $historial->accion }}</td>
                    <td>{{ $historial->descripcion }}</td>
                    <td>{{ $historial->created_at->format('d-m-y') }}</td>
										<td>{{ $historial->created_at->format('h:m:s') }}</td>
                </tr>
            @endforeach
          @else
            <tr>
                <td colspan="5"><em>No se ecnontraron registros en la base de datos</em></td>
            </tr>
        @endif
        </tbody>
    </table>
    <div class="text-center">
      {!! $historiales->render() !!}
    </div>
  </div>
</div>
@endsection
