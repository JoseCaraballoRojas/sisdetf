<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de usuarios</title>
	<style>
		tr:nth-child(even){background-color: rgb(200,200,200)}
	</style>
</head>

<body>
	<div style="border-bottom: solid 3px #3c8dbc;">
		{{--<img src="{{asset('/img/banner1.png')}}" style="width: 720px; height: 60px;">--}}
	</div>
	<div >
		<p style="font-size: 32px; margin-bottom: 0px;">Listado de usuarios registrados<small style="font-size: 16px; color: #808080; float: right;"> Fecha: {{ date('d/m/y' ,time())}}</small></p>
	</div>
	<table style="width: 720px; text-align: center;"  >
		<thead>
			<tr>
        <th style="border: solid black 1.5px;">Usuario</th>
        <th style="border: solid black 1.5px;">Nombre</th>
        <th style="border: solid black 1.5px;">Apellido</th>
        <th style="border: solid black 1.5px;">Tipo</th>
        <th style="border: solid black 1.5px;">Estatus</th>
			</tr>
		</thead>
		<tbody>

			@if (count($usuarios))
				@foreach($usuarios as $usuario)
					<tr>
						<td style="border: solid black 1.5px;">{{  $usuario->usuario }}</td>
						<td style="border: solid black 1.5px;">{{  $usuario->nombre }}</td>
						<td style="border: solid black 1.5px;">{{  $usuario->apellido }}</td>
            <td style="border: solid black 1.5px; {!! $usuario->tipo == 'operador' ? 'color:gray;' : 'color:blue;' !!}" >{{  $usuario->tipo }}</td>
            <td style="border: solid black 1.5px; {!! $usuario->estatus == 'activo' ? 'color:green;' : 'color:red;' !!}" >{{  $usuario->estatus  }}</td>
					</tr>
				@endforeach
			@else
					<tr>
							<td colspan="5" style="border-bottom: solid black 1.5px;"><em>No hay usuarios registrados</em></td>
					</tr>
			@endif
		</tbody>
	</table>
</body>

</html>
