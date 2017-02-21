@extends('admin.template.main')

@section('titulo', 'Historial de acciones en el sistema')

@section('contenido')
<div class="row">
  <div class="col-md-12 ">

    <table class="table table-striped ">
        <thead>
            <th>ID</th>
            <th>Usuario</th>
            <th>Acción</th>
            <th>Descripcion</th>
            <th>Fecha y Hora</th>
        </thead>
        <tbody>
            @foreach($historiales as $historial)
                <tr>
                    <td>{{ $historiales->id }}</td>
                    <td>{{ $historiales->usuario->usuario }}</td>
                    <td>{{ $historiales->accion }}</td>
                    <td>{{ $historiales->descripcion }}</td>
                    <td>{{ $historiales->fechaHora }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
      {!! $modelos->render() !!}
    </div>
  </div>
</div>
@endsection
