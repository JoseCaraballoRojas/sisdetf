<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Falla extends Model
{
  protected $table = 'fallas';

  protected $fillable = [
      'falla', 'descripcion', 'idTipoFK'
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
      return $this->belongsTo('App\Solucion', 'idSolucionFK');
  }

}
