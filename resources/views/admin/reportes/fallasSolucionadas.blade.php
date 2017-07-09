<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>Lista de fallas solucionadas</title>
  	<style>
  		tr:nth-child(even){background-color: rgb(200,200,200)}
  	</style>
  </head>

  <body>
  	<div style="border-bottom: solid 3px #3c8dbc;">
  		{{--<img src="{{asset('/img/banner1.png')}}" style="width: 720px; height: 60px;">--}}
  	</div>
  	<div >
  		<p style="font-size: 32px; margin-bottom: 0px;">Listado de fallas solucionadas <small style="font-size: 16px; color: #808080; float: right;"> Fecha: {{ date('d/m/y' ,time())}}</small></p>
  	</div>
  	<table style="width: 720px; text-align: center;"  >
  		<thead>
  			<tr>
          <th style="border: solid black 1.5px;">Falla</th>
          <th style="border: solid black 1.5px;">Tipo de Equipo</th>
          <th style="border: solid black 1.5px;">Estatus</th>
          <th style="border: solid black 1.5px;">Usuario</th>
          <th style="border: solid black 1.5px;">Fecha</th>
          <th style="border: solid black 1.5px;">Hora</th>
  			</tr>
  		</thead>
  		<tbody>

        @if (count($diagnosticos))
          @foreach($diagnosticos as $diagnostico)
  					<tr>
  						<td style="border: solid black 1.5px;">{{  $diagnostico->falla->falla }}</td>
  						<td style="border: solid black 1.5px;">{{  $falla->descripcion }}</td>
  						<td style="border: solid black 1.5px; color:green;">{{  $diagnostico->estatus }}</td>
              <td style="border: solid black 1.5px;">{{  $diagnostico->usuario }}</td>
              <td style="border: solid black 1.5px;">{{  $diagnostico->created_at->format('Y-m-d') }}</td>
              <td style="border: solid black 1.5px;">{{  $diagnostico->created_at->format('H:m:s')  }}</td>
  					</tr>
  				@endforeach
  			@else
  					<tr>
  							<td colspan="6" style="border-bottom: solid black 1.5px;"><em>No hay fallas solucionadas registradas en la base de datos </em></td>
  					</tr>
  			@endif
  		</tbody>
  	</table>
  </body>
</html>
