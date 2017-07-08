<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'SISDETF')
        <small>@yield('contentheader_description')</small>
    </h1>
   <ol class="breadcrumb">
        <li><a href="{{ url('home') }}"> Inicio</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>  

    @include('admin.template.errores')
</section>
