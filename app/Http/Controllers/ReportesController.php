<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Equipo;
use App\Usuario;
use App\Falla;
use App\Diagnostico;

use PDF;

class ReportesController extends Controller
{

    /**
     * Lista de equipos registrados.
     *
     * @return \Illuminate\Http\Response
     */
    public function equipos()
    {

        $equipos = Equipo::orderBy('id', 'DESC')->get();
        $equipos->each(function ($equipos){
            $equipos->modelo;
        });

        $pdf = PDF::loadView('admin.reportes.equipos', ['equipos' => $equipos])->setPaper('letter');

          return $pdf->stream();

    }

    /**
     * Lista de usuarios registrados.
     *
     * @return \Illuminate\Http\Response
     */
    public function usuarios()
    {

        $usuarios = Usuario::orderBy('id', 'DESC')->get();

        $pdf = PDF::loadView('admin.reportes.usuarios', ['usuarios' => $usuarios])->setPaper('letter');

          return $pdf->stream();

    }

    /**
     * Lista de fallas registradas.
     *
     * @return \Illuminate\Http\Response
     */
    public function fallas()
    {

        $fallas = Falla::orderBy('id', 'DESC')->get();

        $pdf = PDF::loadView('admin.reportes.fallas', ['fallas' => $fallas])->setPaper('letter');

          return $pdf->stream();

    }

    /**
     * Lista de fallas solucionadas registradas.
     *
     * @return \Illuminate\Http\Response
     */
    public function fallasSolucionadas()
    {

        $diagnosticos = Diagnostico::where('estatus', '=', 'solucionada')->get();

        $pdf = PDF::loadView('admin.reportes.fallasSolucionadas', ['diagnosticos' => $diagnosticos])->setPaper('letter');

          return $pdf->stream();

    }
}
