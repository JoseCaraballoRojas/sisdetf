<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
use App\Historial;
class HistorialesController extends Controller
{
  public function index()
  {
    $historiales = Historial::orderBy('id','DESC')->paginate(10);
    return view('admin.historiales.index')->with('historiales', $historiales);
  }
  public function guardar($request)
  {
      $historial = new Historial($request->all());
      dd($historial);
      $historial->usuario = Auth::user()->id;
      $historial->fechaHora = date();
      $historial->save();
  }

}
