<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SolucionRequest;
use App\Solucion;
use Laracasts\Flash\Flash;
use App\Falla;

class SolucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $soluciones = Solucion::orderBy('id', 'DESC')->paginate(5);
      $soluciones->each(function ($soluciones){
          $soluciones->falla;
      });

      return view('admin.soluciones.index')
          ->with('soluciones', $soluciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $fallas = Falla::orderBy('falla', 'ASC')->lists('falla','id');

      return view('admin.soluciones.create')
          ->with('fallas', $fallas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolucionRequest $request)
    {
      $solucion = new Solucion($request->all());
      $solucion->save();

      flash("Se ha agregado la solucion ". $solucion->solucion. " exitosamente!", 'success');

      return redirect()->route('admin.soluciones.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $solucion = Solucion::find($id);
      $solucion->falla;
      $fallas = Falla::orderBy('falla', 'DESC')->lists('falla','id');
      return view('admin.soluciones.edit')
          ->with('fallas', $fallas)
          ->with('solucion', $solucion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SolucionRequest $request, $id)
    {
      $solucion = Solucion::find($id);
      $solucion->fill($request->all());
      $solucion->save();

      flash('La solucion : ' . $solucion->solucion . ' ha sido editada exitosamente', 'warning');
      return redirect()->route('admin.soluciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $solucion = Solucion::find($id);
      $solucion->delete();
      flash('La solucion ' . $solucion->solucion . 'se borro exitosamente', 'danger');
      return redirect()->route('admin.soluciones.index');
    }
}
