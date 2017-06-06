@extends('layouts.app')

@section('htmlheader_title', 'Lista de fallas registradas')

@section('main-content')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.fallas.create')}}" class="btn btn-info">
      <i class="fa fa-plus" aria-hidden="true"></i> Agregar falla
    </a>
    <table class="table table-striped ">
        <thead>
            <th>ID</th>
            <th>Falla</th>
            <th>Descripción</th>
            <th>Tipo</th>
            <th>Acción</th>
        </thead>
        <tbody>
          @if (count($fallas))
            @foreach($fallas as $falla)
                <tr>
                    <td>{{ $falla->id }}</td>
                    <td>{{ $falla->falla }}</td>
                    <td>{{ $falla->descripcion }}</td>
                    <td>{{ $falla->tipo->tipo }}</td>
                    <td> <a href="{{ route('admin.fallas.destroy', $falla->id) }}"
                            onclick=" return confirm('¿Seguro que deseas eliminar la falla ?')"
                            class="btn btn-danger" title="Eliminar falla">
                          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span>
                         </a>
                         <a href="{{ route('admin.fallas.edit', $falla->id) }}"
                           class=" btn btn-warning"
                            >
                           <span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span>
                         </a>
                    </td>
                </tr>
            @endforeach
          @else
              <tr>
                  <td colspan="5"><em>No hay fallas registradas en la base de datos</em></td>
              </tr>
          @endif
        </tbody>
    </table>
    <div class="text-center">
      {!! $fallas->render() !!}
    </div>
  </div>
</div>
@endsection
