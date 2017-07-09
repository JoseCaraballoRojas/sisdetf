<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de equipos</title>
	<style>
		tr:nth-child(even){background-color: rgb(200,200,200)}
	</style>
</head>

<body>
	<div style="border-bottom: solid 3px #3c8dbc;">
		{{--<img src="{{asset('/img/banner1.png')}}" style="width: 720px; height: 60px;">--}}
	</div>
	<div >
		<p style="font-size: 32px; margin-bottom: 0px;">Listado de equipos registrados<small style="font-size: 16px; color: #808080; float: right;"> Fecha: {{ date('d/m/y' ,time())}}</small></p>
	</div>
	<table style="width: 720px; text-align: center;"  >
		<thead>
			<tr>
        <th style="border: solid black 1.5px;">Modelo</th>
				<th style="border: solid black 1.5px;">Equipo</th>
        <th style="border: solid black 1.5px;">Marca</th>
			</tr>
		</thead>
		<tbody>

			@if (count($equipos))
				@foreach($equipos as $equipo)
					<tr>
						<td style="border: solid black 1.5px;">{{ $equipo->equipo }}</td>
						<td style="border: solid black 1.5px;">{{ $equipo->modelo->modelo }}</td>
						<td style="border: solid black 1.5px;">{{ $equipo->modelo->marca->marca }}</td>
					</tr>
				@endforeach
			@else
					<tr>
							<td colspan="3" style="border-bottom: solid black 1.5px;"><em>No hay equipos registrados</em></td>
					</tr>
			@endif
		</tbody>
	</table>
</body>

</html>
