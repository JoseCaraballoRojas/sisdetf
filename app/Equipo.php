<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'equipo', 'idModeloFK'
    ];

    public function modelo()
    {
        return $this->belongsTo('App\Modelo', 'idModeloFK');
    }

}
