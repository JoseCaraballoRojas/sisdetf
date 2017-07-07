@extends('layouts.app')

@section('htmlheader_title', 'Lista de modelos registrados')

@section('main-content')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.modelos.create')}}" class="btn btn-info">
      <i class="fa fa-plus" aria-hidden="true"></i> Agregar modelo
    </a>
    <table class="table table-striped ">
        <thead>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($modelos as $modelo)
                <tr>
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
