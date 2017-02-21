@extends('admin.template.main')

@section('titulo', 'Lista de usuarios')

@section('contenido')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.usuarios.create')}}" class="btn btn-info">Crear Usuario</a>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo</th>
            <th>Estatus</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->usuario }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido }}</td>
                    <td>{{ $usuario->tipo }}</td>
                    <td>{{ $usuario->estatus }}</td>
                    <td> <a href="{{ route('admin.usuarios.destroy', $usuario->id) }}" onclick=" return confirm('¿Seguro que deseas eliminar el usuario ?')" class="btn btn-danger">
                          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span>
                         </a>
                         <a href="{{ route('admin.usuarios.edit', $usuario->id) }}" class=" btn btn-warning">
                           <span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span>
                         </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
      {!! $usuarios->render() !!}
    </div>
  </div>
</div>
@endsection
