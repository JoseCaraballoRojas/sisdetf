<div class="row">
	<div class="col-md-12 ">
		<nav class="navbar navbar-inverse navbar-static-top ">
			<div class="container-fluid">
				<div class="navbar-header">
					<p class="navbar-brand" >Sisdetf</p>
				</div>
				<div class="collapse navbar-collapse " >
					<b>
					<ul class="nav navbar-nav " >
						<li>
							<a href="{{ url('/') }}" >
								<span class="glyphicon glyphicon-home"></span> Inicio
							</a>
						</li>
						<li>
								<a href="{{ route('admin.usuarios.index')}}"> <span class="fa fa-users" aria-hidden="true"> Usuarios</a>
						</li>
						<li>
								<a href="{{ route('admin.marcas.index')}}"> <span class="fa fa-microchip" aria-hidden="true"> Marcas</a>
						</li>
						<li>
								<a href="{{ route('admin.modelos.index')}}"> <span class="glyphicon glyphicon-tasks" aria-hidden="true"> Modelos</a>
						</li>
						<li>
								<a href="{{ route('admin.equipos.index')}}"> <span class="fa fa-desktop" aria-hidden="true"> Equipos</a>
						</li>
						<li>
								<a href="{{ route('admin.tipos.index')}}"> <span class="fa fa-cubes" aria-hidden="true"> Tipos</a>
						</li>
						<li>
								<a href="{{ route('admin.fallas.index')}}"> <span class="fa fa-exclamation-triangle" aria-hidden="true"> Fallas</a>
						</li>
						<li>
								<a href="{{ route('admin.caracteristicas.index')}}"> <span class="fa fa-tags" aria-hidden="true"> Caracteristicas</a>
						</li>
						<li>
								<a href="{{ route('admin.causas.index')}}"> <span class="fa fa-thumb-tack" aria-hidden="true"> Causas</a>
						</li>
						<li>
								<a href="{{ route('admin.soluciones.index')}}"> <span class="fa fa-cogs" aria-hidden="true"> Soluciones</a>
						</li>
						<li>
							<a href="#" class="fa fa-shield dropdown-toggle" aria-hidden="true" data-toggle="dropdown"> Seguridad <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li>
										<a href="#" class="fa fa-history" aria-hidden="true"> Historial</a>
									</li>
								  <li id="li_categorias">
										<a href="" class="fa fa-database" aria-hidden="true"> Respaldo</a>
									</li>
						  	</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#" class="dropdown-toggle" aria-hidden="true" data-toggle="dropdown"> {{ Auth::user()->usuario }} <span class="caret"></span></a>
							<ul  class="dropdown-menu">
								<li>
									<a href="{{ url('/logout') }}" aria-hidden="true"><span class="glyphicon glyphicon-log-out"></span> Salir</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</div>
