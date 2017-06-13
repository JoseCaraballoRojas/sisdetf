<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
  protected $table = 'historiales';

  protected $fillable = [
      'accion ', 'descripcion', 'fechaHora', 'idUsuarioFK', 'usuario'
  ];

  public function usuario()
  {
      return $this->belongsTo('App\Usuario', 'idUsuarioFK');
  }

  public function scopeBuscar($query, $texto)
    {
    	if ($texto != "") {
    		return $query->where('accion', 'LIKE', "%$texto%");	
    	}
    	
    }
}
