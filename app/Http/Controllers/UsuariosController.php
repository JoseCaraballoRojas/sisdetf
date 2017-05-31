<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
use Laracasts\Flash\Flash;
use App\Http\Requests\UsuariosRequest;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::orderBy('id','ASC')->paginate(5);
        return view('admin.usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuariosRequest $request)
    {

        $usuario = new Usuario($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        flash("Se ha registrado el usuario ". $usuario->usuario. " exitosamente!", 'success');

        return redirect()->route('admin.usuarios.index');
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
          $usuario = Usuario::find($id);
          return view('admin.usuarios.edit')->with('usuario', $usuario);

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
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();

        flash('El usuario: ' . $usuario->nombre . ' ha sido editado exitosamente', 'warning');
        return redirect()->route('admin.usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        flash('El usuario ' . $usuario->usuario . 'se borro exitosamente', 'danger');
        return redirect()->route('admin.usuarios.index');
    }

    public function activar(Request $request, $id)
    {
      $usuario = Usuario::find($id);
      $estatus = "activo";
      $usuario->estatus = $estatus;
      $usuario->fill($request->all());
      $usuario->save();

      flash('El usuario ' . $usuario->usuario . 'se activo exitosamente', 'success');
      return redirect()->route('admin.usuarios.index');
    }

    public function desactivar(Request $request,$id)
    {
      $usuario = Usuario::find($id);
      $estatus = "inactivo";
      $usuario->estatus = $estatus;
      $usuario->fill($request->all());
      $usuario->save();

      flash('El usuario ' . $usuario->usuario . 'se desactivo exitosamente', 'danger');
      return redirect()->route('admin.usuarios.index');
    }
}
