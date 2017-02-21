<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
  protected $table = 'historiales';

  protected $fillable = [
      'accion ', 'descripcion', 'fechaHora', 'idUsuarioFK'
  ];

  public function usuario()
  {
      return $this->belongsTo('App\Usuario', 'idUsuarioFK');
  }

}
