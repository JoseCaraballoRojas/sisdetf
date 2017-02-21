@extends('admin.template.main')

@section('titulo', 'Lista de marcas registradas')

@section('contenido')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.marcas.create')}}" class="btn btn-info">Agregar marca</a>
    <table class="table table-striped text-center">
        <thead>
            <th>ID</th>
            <th>marca</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($marcas as $marca)
                <tr>
                    <td>{{ $marca->id }}</td>
                    <td>{{ $marca->marca }}</td>
                    <td> <a href="{{ route('admin.marcas.destroy', $marca->id) }}" onclick=" return confirm('¿Seguro que deseas eliminar la marca ?')" class="btn btn-danger">
                          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span>
                         </a>
                         <a href="{{ route('admin.marcas.edit', $marca->id) }}" class=" btn btn-warning">
                           <span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span>
                         </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
      {!! $marcas->render() !!}
    </div>
  </div>
</div>
@endsection
