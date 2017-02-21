<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'default') | Panel de administración</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
  </head>
  <body>

      @include('admin.template.nav')

      <section>
        <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">@yield('titulo')</h3>
              </div>
              <div class="panel-body">
                @include('flash::message')
                @include('admin.template.errores')
                @yield('contenido')
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer>
        <div class="row">
        <div class="col-md-12 ">
            <nav class="navbar navbar-inverse">
              <div class="container-fluit">
                <div class="collapse navbar-collapse">
                  <p class="navbar-text"> Construido bajos los estandares GPL {{ date('Y') }} </p>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </footer>

      <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }}" ></script>
      <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}" ></script>
  </body>
</html>
