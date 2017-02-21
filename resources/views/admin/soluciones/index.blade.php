@extends('admin.template.main')

@section('titulo', 'Lista de soluciones registradas')

@section('contenido')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.soluciones.create')}}" class="btn btn-info">Agregar Solución</a>
    <table class="table table-striped ">
        <thead>
            <th>ID</th>
            <th>solución</th>
            <th>Descripción</th>
            <th>falla</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($soluciones as $solucion)
                <tr>
                    <td>{{ $solucion->id }}</td>
                    <td>{{ $solucion->solucion }}</td>
                    <td>{{ $solucion->descripcion }}</td>
                    <td>{{ $solucion->falla->falla }}</td>
                    <td> <a href="{{ route('admin.soluciones.destroy', $solucion->id) }}" onclick=" return confirm('¿Seguro que deseas eliminar la solucion ?')" class="btn btn-danger">
                          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span>
                         </a>
                         <a href="{{ route('admin.soluciones.edit', $solucion->id) }}" class=" btn btn-warning">
                           <span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span>
                         </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
      {!! $soluciones->render() !!}
    </div>
  </div>
</div>
@endsection
