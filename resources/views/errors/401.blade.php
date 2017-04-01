@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.unauthorized') }}
@endsection

@section('contentheader_title')
    {{ trans('adminlte_lang::message.401error') }}
@endsection

@section('$contentheader_description')
@endsection

@section('main-content')

<div class="error-page">
    <h2 class="headline text-yellow"> 401</h2>
    <div class="error-content">
        <h3><i class="fa fa-lock text-yellow"></i> Oops! {{ trans('adminlte_lang::message.unauthorized') }}.</h3>
        <p>
            {{ trans('adminlte_lang::message.notauthorized') }}
            {{ trans('adminlte_lang::message.mainwhile') }} <a href='{{ url('/home') }}'>{{ trans('adminlte_lang::message.returndashboard') }}</a>
        </p>

    </div><!-- /.error-content -->
</div><!-- /.error-page -->
@endsection
