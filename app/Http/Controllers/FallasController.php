<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\FallaRequest;
use App\Falla;
use App\Historial;
use Auth;
use Laracasts\Flash\Flash;
use App\Tipo;
use App\Caracteristica;
use App\Causa;
use App\Solucion;

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
      //dd($request->all());
      $falla = new Falla();
      $falla->falla = $request->falla;
      $falla->descripcion = $request->descripcion;
      $falla->tipo_Equipo = $request->tipoEquipo;
      $falla->pregunta = $request->pregunta;
      $falla->idTipoFK = $request->idTipoFK;
      $falla->save();

      $caracteristica1 = new Caracteristica();
      $caracteristica1->caracteristica = $request->caracteristica1;
      $caracteristica1->idFallaFK = $falla->id;
      $caracteristica1->save();

      if ($request->caracteristica2 != '') {
        $caracteristica2 = new Caracteristica();
        $caracteristica2->caracteristica = $request->caracteristica2;
        $caracteristica2->idFallaFK = $falla->id;
        $caracteristica2->save();

      }

      if ($request->caracteristica3 != '') {
        $caracteristica3 = new Caracteristica();
        $caracteristica3->caracteristica = $request->caracteristica3;
        $caracteristica3->idFallaFK = $falla->id;
        $caracteristica3->save();

      }

      $causa1 = new Causa();
      $causa1->causa = $request->causa1;
      $causa1->descripcion = $request->descripcionCausa1;
      $causa1->idFallaFK = $falla->id;
      $causa1->save();

      if ($request->causa2 != '') {
        $causa2 = new Causa();
        $causa2->causa = $request->causa2;
        $causa2->descripcion = $request->descripcionCausa2;
        $causa2->idFallaFK = $falla->id;
        $causa2->save();

      }

      if ($request->causa3 != '') {
        $causa3 = new Causa();
        $causa3->causa = $request->causa3;
        $causa3->descripcion = $request->descripcionCausa3;
        $causa3->idFallaFK = $falla->id;
        $causa3->save();

      }

      $sugerencia1 = new Solucion();
      $sugerencia1->solucion = $request->sugerencia1;
      $sugerencia1->descripcion = $request->descripcionSugerencia1;
      $sugerencia1->idFallaFK = $falla->id;
      $sugerencia1->save();


      if ($request->sugerencia2 != '') {
        $sugerencia2 = new Solucion();
        $sugerencia2->solucion = $request->sugerencia2;
        $sugerencia2->descripcion = $request->descripcionSugerencia2;
        $sugerencia2->idFallaFK = $falla->id;
        $sugerencia2->save();

      }

      if ($request->sugerencia3 != '') {
        $sugerencia3 = new Solucion();
        $sugerencia3->solucion = $request->sugerencia3;
        $sugerencia3->descripcion = $request->descripcionSugerencia3;
        $sugerencia3->idFallaFK = $falla->id;
        $sugerencia3->save();
        
      }


      //resgitar la actividad en el historial del sistema
      $historial = new Historial();
      $historial->accion = 'Agrego';
      $historial->descripcion = 'Agrego la falla ! '.$falla->falla.' !';
      $historial->idUsuarioFK = Auth::user()->id;
      $historial->save();

      flash("Se agrego la falla ". $falla->falla. " exitosamente!", 'success');

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

      //resgitar la actividad en el historial del sistema
      $historial = new Historial();
      $historial->accion = 'Edito';
      $historial->descripcion = 'Edito la falla ! '.$falla->falla.' !';
      $historial->idUsuarioFK = Auth::user()->id;
      $historial->save();

      flash('La falla : ' . $falla->falla . ' ha sido editada exitosamente', 'warning');
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

      //resgitar la actividad en el historial del sistema
      $historial = new Historial();
      $historial->accion = 'Borro';
      $historial->descripcion = 'Borro la falla ! '.$falla->falla.' !';
      $historial->idUsuarioFK = Auth::user()->id;
      $historial->save();

      flash('LA falla ' . $falla->falla . 'se borro exitosamente', 'danger');
      return redirect()->route('admin.fallas.index');
    }
}
