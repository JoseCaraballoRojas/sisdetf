<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CaracteristicaRequest;
use App\Caracteristica;
use Laracasts\Flash\Flash;
use App\Falla;

class CaracteristicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $caracteristicas = Caracteristica::orderBy('id', 'DESC')->paginate(5);
      $caracteristicas->each(function ($caracteristicas){
          $caracteristicas->falla;
      });

      return view('admin.caracteristicas.index')
          ->with('caracteristicas', $caracteristicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $fallas = Falla::orderBy('falla', 'ASC')->lists('falla','id');

      return view('admin.caracteristicas.create')
          ->with('fallas', $fallas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CaracteristicaRequest $request)
    {
      $caracteristica = new Caracteristica($request->all());
      $caracteristica->save();

      Flash::success("Se ha agregado la caracteristica ". $caracteristica->caracteristica. " exitosamente!");

      return redirect()->route('admin.caracteristicas.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $caracteristica = Caracteristica::find($id);
      $caracteristica->falla;
      $fallas = Falla::orderBy('falla', 'DESC')->lists('falla','id');
      return view('admin.caracteristicas.edit')
          ->with('fallas', $fallas)
          ->with('caracteristica', $caracteristica);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CaracteristicaRequest $request, $id)
    {
      $caracteristica = Caracteristica::find($id);
      $caracteristica->fill($request->all());
      $caracteristica->save();

      Flash::warning('La caracteristica : ' . $caracteristica->caracteristica . ' ha sido editada exitosamente');
      return redirect()->route('admin.caracteristicas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $caracteristica = Caracteristica::find($id);
      $caracteristica->delete();
      flash('La caracteristica ' . $caracteristica->caracteristica . 'se borro exitosamente', 'danger');
      return redirect()->route('admin.caracteristicas.index');
    }
}
