@extends('admin.template.main')

@section('titulo', 'Lista de modelos registrados')

@section('contenido')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.modelos.create')}}" class="btn btn-info">Agregar modelo</a>
    <table class="table table-striped ">
        <thead>
            <th>ID</th>
            <th>modelo</th>
            <th>marca</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($modelos as $modelo)
                <tr>
                    <td>{{ $modelo->id }}</td>
                    <td>{{ $modelo->modelo }}</td>
                    <td>{{ $modelo->marca->marca }}</td>
                    <td> <a href="{{ route('admin.modelos.destroy', $modelo->id) }}" onclick=" return confirm('¿Seguro que deseas eliminar el modelo ?')" class="btn btn-danger">
                          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span>
                         </a>
                         <a href="{{ route('admin.modelos.edit', $modelo->id) }}" class=" btn btn-warning">
                           <span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span>
                         </a>
                    </td>
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
