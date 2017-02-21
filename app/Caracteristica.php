<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
  protected $table = 'caracteristicas';

  protected $fillable = [
      'caracteristica', 'idFallaFK'
  ];

  public function falla()
  {
      return $this->belongsTo('App\Falla', 'idFallaFK');
  }
}
