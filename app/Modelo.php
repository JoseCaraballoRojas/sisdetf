<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
  protected $table = 'modelos';

  protected $fillable = [
      'modelo', 'idMarcaFK'
  ];

  public function marca()
  {
      return $this->belongsTo('App\Marca', 'idMarcaFK');
  }

  public function equipos()
  {
      return $this->hasMany('App\Equipo');
  }

}
