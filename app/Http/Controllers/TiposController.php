<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TipoRequest;
use App\Tipo;
use Laracasts\Flash\Flash;
class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipos = Tipo::orderBy('id','ASC')->paginate(5);
      return view('admin.tipos.index')->with('tipos', $tipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoRequest $request)
    {
      $tipo = new Tipo($request->all());
      $tipo->save();

      Flash::success("Se ha agregado el tipo ". $tipo->tipo. " exitosamente!");

      return redirect()->route('admin.tipos.index');
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
      $tipo = Tipo::find($id);
      return view('admin.tipos.edit')->with('tipo', $tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoRequest $request, $id)
    {
      $tipo = Tipo::find($id);
      $tipo->fill($request->all());
      $tipo->save();

      Flash::warning('El tipo: ' . $tipo->tipo . ' ha sido editado exitosamente');
      return redirect()->route('admin.tipos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $tipo = Tipo::find($id);
      $tipo->delete();
      flash('El tipo ' . $tipo->tipo . 'se borro exitosamente', 'danger');
      return redirect()->route('admin.tipos.index');
    }
}
