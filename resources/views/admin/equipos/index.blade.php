@extends('layouts.app')

@section('htmlheader_title', 'Lista de equipos registrados')

@section('main-content')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.equipos.create')}}" class="btn btn-info">
      <i class="fa fa-plus" aria-hidden="true"></i> Registrar Equipos
    </a>
    <table class="table table-striped ">
        <thead>
            <th>Equipo</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->equipo }}</td>
                    <td>{{ $equipo->modelo->modelo }}</td>
                    <td>{{ $equipo->modelo->marca->marca }}</td>
                    <td> <a href="{{ route('admin.equipos.destroy', $equipo->id) }}" onclick=" return confirm('¿Seguro que deseas eliminar el equipo ?')" class="btn btn-danger">
                          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span>
                         </a>
                         <a href="{{ route('admin.equipos.edit', $equipo->id) }}" class=" btn btn-warning">
                           <span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span>
                         </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
      {!! $equipos->render() !!}
    </div>
  </div>
</div>
@endsection
