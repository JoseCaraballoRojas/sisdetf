@extends('layouts.app')

@section('htmlheader.app', 'Lista de las caracteristicas registradas')

@section('main-content')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.caracteristicas.create')}}" class="btn btn-info">
      <i class="fa fa-plus" aria-hidden="true"></i> Agregar Caracteristica
    </a>
    <table class="table table-striped ">
        <thead>
            <th>Caracteristica</th>
            <th>Falla</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($caracteristicas as $caracteristica)
                <tr>
                    <td>{{ $caracteristica->caracteristica }}</td>
                    <td>{{ $caracteristica->falla->falla }}</td>
                    <td> <a href="{{ route('admin.caracteristicas.destroy', $caracteristica->id) }}" onclick=" return confirm('¿Seguro que deseas eliminar la caracteristica ?')" class="btn btn-danger">
                          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span>
                         </a>
                         <a href="{{ route('admin.caracteristicas.edit', $caracteristica->id) }}" class=" btn btn-warning">
                           <span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span>
                         </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
      {!! $caracteristicas->render() !!}
    </div>
  </div>
</div>
@endsection
