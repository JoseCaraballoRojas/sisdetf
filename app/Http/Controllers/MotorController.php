<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tipo;
use App\Falla;
use App\Diagnostico;
use App\Historial;
use Auth;
class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.motor.consulta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        if ($request->tipo == 'escritorio') 
        {

          if ($request->enciende == 'no') {
            
            $tipo = Tipo::where('tipo', '=', 'falla electrica' )->get();
            $id = 0;
            
            foreach ($tipo as $val) {
                $id = $val->id;
            }
            
            $fallas = Falla::where('idTipoFK', '=', $id )->paginate(5);

            $fallas2 = Falla::where('idTipoFK', '=', $id )->paginate(1);
            $fallas2->each(function ($fallas2){
                $fallas2->caracteristicas;
                $fallas2->soluciones;
            });

              return view('admin.motor.diagnoticarFallaElectrica')
                  ->with('fallas', $fallas)
                  ->with('fallas2', $fallas2);
          }

          else{

            return view('admin.motor.consultaVideo');
          }

        }
        elseif ($request->tipo == 'portatil') {
          # code...
        }
            
        
         
    }

    public function fallaVideo(Request $request)
    {
        //dd($request->all());

        if ($request->tipo == 'escritorio') 
        {

          if ($request->video == 'no') {

            $tipo = Tipo::where('tipo', '=', 'falla de video' )->get();
            $id = 0;
            
            foreach ($tipo as $val) {
                $id = $val->id;
            }
            
            $fallas = Falla::where('idTipoFK', '=', $id )->paginate(5);

            $fallas2 = Falla::where('idTipoFK', '=', $id )->paginate(1);
            $fallas2->each(function ($fallas2){
                $fallas2->caracteristicas;
                $fallas2->soluciones;
            });

              return view('admin.motor.diagnosticarFallaVideo')
                  ->with('fallas', $fallas)
                  ->with('fallas2', $fallas2);
          }

          else{

            return view('admin.motor.consultaArranque');
          }

        }
        elseif ($request->tipo == 'portatil') {
            # code...
        }
        
    }

    public function fallaArranque(Request $request)
    {
        //dd($request->all());

        if ($request->tipo == 'escritorio') 
        {

          if ($request->arranque == 'no') {

            $tipo = Tipo::where('tipo', '=', 'falla de arranque' )->get();
            $id = 0;
            
            foreach ($tipo as $val) {
                $id = $val->id;
            }
            
            $fallas = Falla::where('idTipoFK', '=', $id )->paginate(5);

            $fallas2 = Falla::where('idTipoFK', '=', $id )->paginate(1);
            $fallas2->each(function ($fallas2){
                $fallas2->caracteristicas;
                $fallas2->soluciones;
            });

              return view('admin.motor.diagnosticarFallaArranque')
                  ->with('fallas', $fallas)
                  ->with('fallas2', $fallas2);

          }

          else{

            return view('admin.motor.consultaSO');
          }

        }
        elseif ($request->tipo == 'portatil') {
            # code...
        }
        
    }

     public function fallaSO(Request $request)
    {
        //dd($request->all());

        if ($request->tipo == 'escritorio') 
        {

          if ($request->so == 'no') {

                $tipo = Tipo::where('tipo', '=', 'falla de sistema operativo' )->get();
                $id = 0;
                
                foreach ($tipo as $val) {
                    $id = $val->id;
                }

                $fallas2 = Falla::where('idTipoFK', '=', $id )
                                ->where('falla', '=', 'no inicia sistema operativo' )
                                ->first();
                
                $fallas2->each(function ($fallas2){
                    $fallas2->caracteristicas;
                    $fallas2->soluciones;
                });
                //dd($fallas2->pregunta);
                  return view('admin.motor.diagnosticarNoSystem')
                        ->with('fallas2', $fallas2);

              //return view('admin.motor.diagnosticarNoSystem')
          }

          else{

            $tipo = Tipo::where('tipo', '=', 'falla de sistema operativo' )->get();
            $id = 0;
            
            foreach ($tipo as $val) {
                $id = $val->id;
            }
            
            $fallas = Falla::where('idTipoFK', '=', $id )->paginate(5);

            $fallas2 = Falla::where('idTipoFK', '=', $id )->paginate(1);
            $fallas2->each(function ($fallas2){
                $fallas2->caracteristicas;
                $fallas2->soluciones;
            });

              return view('admin.motor.diagnosticarFallaSO')
                  ->with('fallas', $fallas)
                  ->with('fallas2', $fallas2);
          }

        }
        elseif ($request->tipo == 'portatil') {
            # code...
        }
        
    }

    public function guardar(Request $request)
    {
        //dd($request->all());
        //agregar falla
          $diagnostico = new Diagnostico();
          $diagnostico->tipo = $request->tipo;
          $diagnostico->estatus = $request->estatus == 'si' ? 'solucionada' : 'no solucionada';
          $diagnostico->usuario = Auth::user()->usuario;
          $diagnostico->idFallaFK = $request->id;
          //dd($diagnostico);
          $diagnostico->save();
        //agregar al historial
          $historial = new Historial();
          $historial->accion = 'genero diagnostico';
          $historial->descripcion = 'Genero diagnostico de falla !';
          $historial->idUsuarioFK = Auth::user()->id;
          $historial->save();

           flash("El diagnostico se genero  exitosamente!", 'success');
           return redirect('home');

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
        //
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tipoEquipo($tipo)
    {
        //
    }
}
