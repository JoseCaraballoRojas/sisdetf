<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    //rutas de usuarios solo con acceso para administradores ...
    Route::group(['middleware' => 'admin'], function(){

        Route::resource('usuarios', 'UsuariosController');
        Route::get('usuario/{id}/destroy', [
        'uses' => 'UsuariosController@destroy',
        'as' => 'admin.usuarios.destroy'
        ]);
        Route::get('usuario/{id}/activar', [
        'uses' => 'UsuariosController@activar',
        'as' => 'admin.usuarios.activar'
        ]);
        Route::get('usuario/{id}/desactivar', [
        'uses' => 'UsuariosController@desactivar',
        'as' => 'admin.usuarios.desactivar'
        ]);
        //ruta para mostrar historial
        Route::get('historial/index', [
        'uses' => 'HistorialesController@index',
        'as' => 'admin.historiales.index'
        ]);

    });


    //rutas de marcas...
    Route::resource('marcas', 'MarcasController');
    Route::get('marca/{id}/destroy', [
    'uses' => 'MarcasController@destroy',
    'as' => 'admin.marcas.destroy'
    ]);

    //rutas de modelos...
    Route::resource('modelos', 'ModelosController');
    Route::get('modelo/{id}/destroy', [
    'uses' => 'ModelosController@destroy',
    'as' => 'admin.modelos.destroy'
    ]);

    //rutas de equipos...
    Route::resource('equipos', 'EquiposController');
    Route::get('equipo/{id}/destroy', [
    'uses' => 'EquiposController@destroy',
    'as' => 'admin.equipos.destroy'
    ]);

    //rutas de tipos...
    Route::resource('tipos', 'TiposController');
    Route::get('tipo/{id}/destroy', [
    'uses' => 'TiposController@destroy',
    'as' => 'admin.tipos.destroy'
    ]);

    //rutas de fallas...
    Route::resource('fallas', 'FallasController');
    Route::get('falla/{id}/destroy', [
    'uses' => 'FallasController@destroy',
    'as' => 'admin.fallas.destroy'
    ]);

    //rutas de caracteristicas...
    Route::resource('caracteristicas', 'CaracteristicasController');
    Route::get('caracteristica/{id}/destroy', [
    'uses' => 'CaracteristicasController@destroy',
    'as' => 'admin.caracteristicas.destroy'
    ]);

    //rutas de causas...
    Route::resource('causas', 'CausasController');
    Route::get('causa/{id}/destroy', [
    'uses' => 'CausasController@destroy',
    'as' => 'admin.causas.destroy'
    ]);

    //rutas de soluciones...
    Route::resource('soluciones', 'SolucionesController');
    Route::get('solucion/{id}/destroy', [
    'uses' => 'SolucionesController@destroy',
    'as' => 'admin.soluciones.destroy'
    ]);


    //ruta para home
    Route::get('/home', 'HomeController@index');
});

Route::auth();
