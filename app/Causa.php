<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Causa extends Model
{
  protected $table = 'causas';

  protected $fillable = [
      'causa', 'descripcion', 'idFallaFK'
  ];

  public function falla()
  {
      return $this->belongsTo('App\Falla', 'idFallaFK');
  }
  
}
