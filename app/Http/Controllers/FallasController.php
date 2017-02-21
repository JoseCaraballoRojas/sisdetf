<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\FallaRequest;
use App\Falla;
use Laracasts\Flash\Flash;
use App\Tipo;

class FallasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fallas = Falla::orderBy('id', 'DESC')->paginate(5);
      $fallas->each(function ($fallas){
          $fallas->tipo;
      });

      return view('admin.fallas.index')
          ->with('fallas', $fallas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tipos = Tipo::orderBy('tipo', 'ASC')->lists('tipo','id');

      return view('admin.fallas.create')
          ->with('tipos', $tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FallaRequest $request)
    {
      $falla = new Falla($request->all());
      $falla->save();

      Flash::success("Se ha agregado la falla ". $falla->falla. " exitosamente!");

      return redirect()->route('admin.fallas.index');
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
      $falla = Falla::find($id);
      $falla->tipo;
      $tipos = Tipo::orderBy('tipo', 'DESC')->lists('tipo','id');
      return view('admin.fallas.edit')
          ->with('tipos', $tipos)
          ->with('falla', $falla);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FallaRequest $request, $id)
    {
      $falla = Falla::find($id);
      $falla->fill($request->all());
      $falla->save();

      Flash::warning('La falla : ' . $falla->falla . ' ha sido editada exitosamente');
      return redirect()->route('admin.fallas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $falla = Falla::find($id);
      $falla->delete();
      flash('LA falla ' . $falla->falla . 'se borro exitosamente', 'danger');
      return redirect()->route('admin.fallas.index');
    }
}
