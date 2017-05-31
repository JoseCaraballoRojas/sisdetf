<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CausaRequest;
use App\Causa;
use Laracasts\Flash\Flash;
use App\Falla;

class CausasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $causas = Causa::orderBy('id', 'DESC')->paginate(5);
      $causas->each(function ($causas){
          $causas->falla;
      });

      return view('admin.causas.index')
          ->with('causas', $causas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $fallas = Falla::orderBy('falla', 'ASC')->lists('falla','id');

      return view('admin.causas.create')
          ->with('fallas', $fallas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CausaRequest $request)
    {
      $causa = new Causa($request->all());
      $causa->save();

      flash("Se ha agregado la causa ". $causa->causa. " exitosamente!", 'success');

      return redirect()->route('admin.causas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $causa = Causa::find($id);
      $causa->falla;
      $fallas = Falla::orderBy('falla', 'DESC')->lists('falla','id');
      return view('admin.causas.edit')
          ->with('fallas', $fallas)
          ->with('causa', $causa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CausaRequest $request, $id)
    {
      $causa = Causa::find($id);
      $causa->fill($request->all());
      $causa->save();

      flash('La causa : ' . $causa->causa . ' ha sido editada exitosamente', 'warning');
      return redirect()->route('admin.causas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $causa = Causa::find($id);
      $causa->delete();
      flash('La causa ' . $causa->causa . 'se borro exitosamente', 'danger');
      return redirect()->route('admin.causas.index');
    }
}
