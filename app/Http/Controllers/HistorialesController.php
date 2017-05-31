<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
use App\Historial;
class HistorialesController extends Controller
{
  /**
  * Funcion para listar el historial de movimientos de los usuarios
  *
  **/
  public function index()
  {
    $historiales = Historial::orderBy('id','DESC')->paginate(10);
    return view('admin.historiales.index')->with('historiales', $historiales);
  }


}
