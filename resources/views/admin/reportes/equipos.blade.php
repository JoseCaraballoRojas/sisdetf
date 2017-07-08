<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de equipos</title>
</head>

<body>
	<div>
		<img src="{{ asset('img/banner1.png') }}" style="width: 720px; height: 60px;">
	</div>
	<div >
		<p style="font-size: 32px; margin-bottom: 0px;">Lista de equipos<small style="font-size: 16px; color: #808080;"> {{ date('d/m/y' ,time())}}</small></p>
	</div>
	{{--<table style="width: 720px; text-align: center;"  >
		<thead>
			<tr>
        <th>Equipo</th>
        <th>Modelo</th>
        <th>Marca</th>
			</tr>
		</thead>
		<tbody>
			@if (count($equipos))
				@foreach($equipos as $equipo)
					<tr>
						<td style="border-bottom: solid black 1.5px;">{{ $equipo->equipo }}</td>
						<td style="border-bottom: solid black 1.5px;">{{ $equipo->modelo->modelo }}</td>
						<td style="border-bottom: solid black 1.5px;">{{ $equipo->modelo->marca->marca }}</td>
					</tr>
				@endforeach
			@else
					<tr>
							<td colspan="3" style="border-bottom: solid black 1.5px;"><em>No hay equipos registrados</em></td>
					</tr>
			@endif
		</tbody>
	</table>--}}
</body>

</html>
