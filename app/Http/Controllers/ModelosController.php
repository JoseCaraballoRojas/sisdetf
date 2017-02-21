<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ModeloRequest;
use App\Modelo;
use Laracasts\Flash\Flash;
use App\Marca;

class ModelosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $modelos = Modelo::orderBy('id', 'DESC')->paginate(5);
      $modelos->each(function ($modelos){
          $modelos->marca;
      });

      return view('admin.modelos.index')
          ->with('modelos', $modelos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::orderBy('marca', 'ASC')->lists('marca','id');

        return view('admin.modelos.create')
            ->with('marcas', $marcas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModeloRequest $request)
    {
      $modelo = new Modelo($request->all());
      $modelo->save();

      Flash::success("Se ha agregado el modelo ". $modelo->modelo. " exitosamente!");

      return redirect()->route('admin.modelos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $modelo = Modelo::find($id);
      $modelo->marca;
      $marcas = Marca::orderBy('marca', 'DESC')->lists('marca','id');
      return view('admin.modelos.edit')
          ->with('marcas', $marcas)
          ->with('modelo', $modelo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $modelo = Modelo::find($id);
      $modelo->fill($request->all());
      $modelo->save();

      Flash::warning('El modelo : ' . $modelo->modelo . ' ha sido editado exitosamente');
      return redirect()->route('admin.modelos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $modelo = Modelo::find($id);
      $modelo->delete();
      flash('El modelo ' . $modelo->modelo . 'se borro exitosamente', 'danger');
      return redirect()->route('admin.modelos.index');
    }
}
