<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/logo-sisdetf.png')}}" class="img" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->nombre }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        {{-- search form (Optional)
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            {{--<li class="header">{{ trans('adminlte_lang::message.header') }}</li>--}}
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            {{--<li><a href="{{ route('admin.usuarios.index')}}"> <span class="fa fa-users" aria-hidden="true"> Usuarios</a></li>--}}
            @if(Auth::user()->admin())
            <li><a href="{{ route('admin.marcas.index')}}"><i class='fa fa fa-apple'></i>Marcas</a></li>
            <li><a href="{{ route('admin.modelos.index')}}"><i class='fa fa-steam'></i>Modelos</a></li>
            <li><a href="{{ route('admin.equipos.index')}}"><i class='fa fa-desktop'></i>Equipos</a></li>

            {{--<li class="treeview">
                <a href="#"><i class='fa fa-desktop'></i> <span>Equipos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                </ul>
            </li>--}}
            <li class="treeview">
                <a href="#"><i class='fa fa-exclamation-triangle'></i> <span>Fallas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.tipos.index')}}"> <span class="fa fa-cubes" aria-hidden="true"> Tipos</a></li>
                    <li><a href="{{ route('admin.caracteristicas.index')}}"> <span class="fa fa-tags" aria-hidden="true"> Caracteristicas</a></li>
                    <li><a href="{{ route('admin.causas.index')}}"> <span class="fa fa-thumb-tack" aria-hidden="true"> Causas</a></li>
                    <li><a href="{{ route('admin.soluciones.index')}}"> <span class="fa fa-cogs" aria-hidden="true"> Sugerencias</a></li>
                    <li><a href="{{ route('admin.fallas.index')}}"> <span class="fa fa-exclamation-triangle" aria-hidden="true"> Fallas</a></li>
                </ul>
            </li>
            @endif
            <li class="treeview">
                <a href="{{ route('admin.motor.create')}}"><i class='fa fa-wrench'></i> <span>Diagnosticar</span></a>
            </li>
            @if(Auth::user()->admin())
            <li class="treeview">
                <a href="{{ route('admin.diagnosticos.index')}}"><i class='fa fa-magic'></i> <span>Historial de Diagnósticos</span></a>
            </li>
            <li class="treeview">
                <a href="{{ route('admin.diagnosticos.indexSolucionadas')}}"><i class='fa fa-check-square-o'></i> <span>Historial de Soluciones</span></a>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-line-chart'></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="treeview">
                      <a href="#"><i class='fa fa-file-pdf-o'></i> <span>Pdf</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                          <li>
                            <a href="{{ route('admin.reportes.equipos')}}" target="_blank"> <span class="fa fa-desktop" aria-hidden="true"> Equipos</span></a>
                          </li>
                          <li>
                            <a href="{{ route('admin.reportes.usuarios')}}" target="_blank"> <span class="fa fa-users" aria-hidden="true"> Usuarios</span></a>
                          </li>
                          <li>
                            <a href="{{ route('admin.reportes.fallas')}}" target="_blank"> <span class="fa fa-exclamation-triangle" aria-hidden="true"> Fallas</span></a>
                          </li>
                          <li>
                            <a href="{{ route('admin.reportes.fallasSolucionadas')}}" target="_blank"> <span class="fa fa-check-square-o" aria-hidden="true"> Fallas solucionadas</span></a>
                          </li>
                        </ul>
                    </li>
                    <li class="treeview">
                      <a href="#"><i class='fa fa-pie-chart'></i> <span> Graficos</span> <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li>
                          <a href="{{ route('admin.reportes.equipos')}}"> <span class="fa fa-desktop" aria-hidden="true"> Equipos</a>
                        </li>
                      </ul>
                    </li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-shield'></i> <span>Seguridad</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.usuarios.index')}}"><i class='fa fa-users'></i> Usuarios</a></li>
                    <li><a href="#"><i class='fa fa-database'></i> Respaldo</a></li>
                    <li><a href="{{ route('admin.historiales.index')}}"><i class='fa fa-history'></i> Bitácora de Uso</a></li>
                </ul>
            </li>
            @endif
            <li class="treeview">
                <a href="{{-- route('admin.diagnosticos.indexSolucionadas')--}}#"><i class='fa fa-question-circle'></i> <span>Ayuda</span></a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
