<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Falla extends Model
{
  protected $table = 'fallas';

  protected $fillable = [
      'falla', 'descripcion', 'idTipoFK', 'caracteristica1', 'caracteristica2',
      'caracteristica3', 'causa1', 'causa2', 'causa3', 'sugerencia1', 'sugerencia2',
      'sugerencia3', 'solucion'
  ];

  public function tipo()
  {
      return $this->belongsTo('App\Tipo', 'idTipoFK');
  }

  public function causas()
  {
      return $this->belongsTo('App\Causa', 'idCausaFK');
  }
  public function soluciones()
  {
      return $this->hasMany('App\Solucion', 'idFallaFK');
  }

   public function caracteristicas()
    {
        return $this->hasMany('App\Caracteristica', 'idFallaFK');
    }

}
