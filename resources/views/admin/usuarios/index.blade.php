@extends('layouts.app')

@section('htmlheader_title')
	Lista de usuarios
@endsection

@section('main-content')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.usuarios.create')}}" class="btn btn-info">
			<span class="glyphicon glyphicon-plus" aria-hidden="true" ></span>
			Crear Usuario</a>
    <table class="table table-striped">
        <thead>
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
                    <td>{{ $usuario->usuario }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido }}</td>
                    <td>{{ $usuario->tipo }}</td>
                    <td>{{ $usuario->estatus }}</td>
                    <td>
					   <a href="{{ route('admin.usuarios.activar', $usuario->id) }}"
						 class="btn btn-success {{ $usuario->estatus == 'activo' ? 'disabled' : '' }}"
						 title="Activar Usuario">
	                     <span class="glyphicon glyphicon-ok" aria-hidden="true" ></span>
	                    </a>
						<a href="{{ route('admin.usuarios.desactivar', $usuario->id) }}"
						   class="btn btn-danger {{ $usuario->estatus == 'inactivo' ? 'disabled' : '' }} "
						   title="Desactivar Usuario">
	                          <span class="glyphicon glyphicon-off" aria-hidden="true" ></span>
	                    </a>

                         <a href="{{ route('admin.usuarios.edit', $usuario->id) }}"
													  class=" btn btn-primary"
														title="Editar Usuario">
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
