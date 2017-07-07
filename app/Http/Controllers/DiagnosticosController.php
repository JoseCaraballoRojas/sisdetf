<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Diagnostico;

class DiagnosticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $diagnosticos = Diagnostico::Buscar($request->texto)->orderBy('id', 'DESC')->paginate(7);
        $diagnosticos->each(function ($diagnosticos){
          $diagnosticos->falla;
      });

      return view('admin.diagnosticos.index')
          ->with('diagnosticos', $diagnosticos);
    }

    public function indexSolucionadas()
    {
        $diagnosticos = Diagnostico::where('estatus', '=', 'solucionada')->paginate(7);
        $diagnosticos->each(function ($diagnosticos){
          $diagnosticos->falla;
      });
      return view('admin.diagnosticos.indexSolucionadas')
          ->with('diagnosticos', $diagnosticos);
    }
}
