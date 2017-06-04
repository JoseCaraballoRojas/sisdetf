@extends('layouts.app')

@section('htmlheader_title', 'Lista de los tipos registrados')

@section('main-content')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.tipos.create')}}" class="btn btn-info">
      <i class="fa fa-plus" aria-hidden="true"></i> Agregar tipo
    </a>
    <table class="table table-striped text-center">
        <thead>
            <th>ID</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($tipos as $tipo)
                <tr>
                    <td>{{ $tipo->id }}</td>
                    <td>{{ $tipo->tipo }}</td>
                    <td>{{ $tipo->descripcion }}</td>
                    <td> <a href="{{ route('admin.tipos.destroy', $tipo->id) }}" onclick=" return confirm('¿Seguro que deseas eliminar el tipo ?')" class="btn btn-danger">
                          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span>
                         </a>
                         <a href="{{ route('admin.tipos.edit', $tipo->id) }}" class=" btn btn-warning">
                           <span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span>
                         </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
      {!! $tipos->render() !!}
    </div>
  </div>
</div>
@endsection
