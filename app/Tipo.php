<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
  protected $table = 'tipos';

  protected $fillable = [
      'tipo', 'descripcion','falla', 'descripcion', 'idTipoFK', 'caracteristica1', 'caracteristica2',
      'caracteristica3', 'causa1', 'causa2', 'causa3', 'sugerencia1', 'sugerencia2',
      'sugerencia3'
  ];

  public function fallas()
    {
        return $this->hasMany('App\Falla', 'idTipoFK');
    }
}
