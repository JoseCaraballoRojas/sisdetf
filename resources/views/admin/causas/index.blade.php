@extends('layouts.app')

@section('htmlheader_title', 'Lista de causas registradas')

@section('main-content')
<div class="row">
  <div class="col-md-12 ">
    <a href="{{ route('admin.causas.create')}}" class="btn btn-info">
      <i class="fa fa-plus" aria-hidden="true"></i> Agregar Causa
    </a>
    <table class="table table-striped ">
        <thead>
            <th>Causa</th>
            <th>Falla</th>
            <th>Descripción</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($causas as $causa)
                <tr>
                    <td>{{ $causa->causa }}</td>
                    <td>{{ $causa->descripcion }}</td>
                    <td>{{ $causa->falla->falla }}</td>
                    <td> <a href="{{ route('admin.causas.destroy', $causa->id) }}" onclick=" return confirm('¿Seguro que deseas eliminar la causa ?')" class="btn btn-danger">
                          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true" ></span>
                         </a>
                         <a href="{{ route('admin.causas.edit', $causa->id) }}" class=" btn btn-warning">
                           <span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span>
                         </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
      {!! $causas->render() !!}
    </div>
  </div>
</div>
@endsection
