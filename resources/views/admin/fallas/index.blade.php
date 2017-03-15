@extends('layouts.app')

@section('htmlheader_title', 'Lista de fallas registradas')

@section('main-content')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.fallas.create')}}" class="btn btn-info">Agregar falla</a>
    <table class="table table-striped ">
        <thead>
            <th>ID</th>
            <th>Falla</th>
            <th>Descripción</th>
            <th>Tipo</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($fallas as $falla)
                <tr>
                    <td>{{ $falla->id }}</td>
                    <td>{{ $falla->falla }}</td>
                    <td>{{ $falla->descripcion }}</td>
                    <td>{{ $falla->tipo->tipo }}</td>
                    <td> <a href="{{ route('admin.fallas.destroy', $falla->id) }}" onclick=" return confirm('¿Seguro que deseas eliminar la falla ?')" class="btn btn-danger">
                          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span>
                         </a>
                         <a href="{{ route('admin.fallas.edit', $falla->id) }}" class=" btn btn-warning">
                           <span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span>
                         </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
      {!! $fallas->render() !!}
    </div>
  </div>
</div>
@endsection
