<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
  protected $table = 'soluciones';

  protected $fillable = [
      'solucion', 'descripcion', 'idFallaFK'
  ];

  public function falla()
  {
      return $this->belongsTo('App\Falla', 'idFallaFK');
  }
}
