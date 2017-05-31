<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MarcaRequest;
use App\Marca;
use App\Historial;
use Auth;
use Laracasts\Flash\Flash;


class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $marcas = Marca::orderBy('id','ASC')->paginate(5);
      return view('admin.marcas.index')->with('marcas', $marcas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaRequest $request)
    {
        $marca = new Marca($request->all());
        $marca->save();

        //resgitar la actividad en el historial del sistema
        $historial = new Historial();
        $historial->accion = 'Agrego';
        $historial->descripcion = 'Agrego la marca ! '.$marca->marca.' !';
        $historial->idUsuarioFK = Auth::user()->id;
        $historial->save();

        flash("Se agrego la marca ". $marca->marca. " exitosamente!", 'success');

        return redirect()->route('admin.marcas.index');
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
      $marca = Marca::find($id);
      return view('admin.marcas.edit')->with('marca', $marca);
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
      $marca = Marca::find($id);
      $marca->fill($request->all());
      $marca->save();

      //resgitar la actividad en el historial del sistema
      $historial = new Historial();
      $historial->accion = 'Edito';
      $historial->descripcion = 'Edito la marca ! '.$marca->marca.' !';
      $historial->idUsuarioFK = Auth::user()->id;
      $historial->save();

      flash('La marca: ' . $marca->marca . ' ha sido editada exitosamente', 'warning');
      return redirect()->route('admin.marcas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $marca = Marca::find($id);
      $marca->delete();

      //resgitar la actividad en el historial del sistema
      $historial = new Historial();
      $historial->accion = 'Borro';
      $historial->descripcion = 'Borro la marca ! '.$marca->marca.' !';
      $historial->idUsuarioFK = Auth::user()->id;
      $historial->save();

      flash('La marca ' . $marca->marca . 'se borro exitosamente', 'danger');
      return redirect()->route('admin.marcas.index');
    }
}
