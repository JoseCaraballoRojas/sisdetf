<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnosticos';

    protected $fillable = [
        'tipo', ' estatus', 'usuario', 'idFallaFK'
    ];

    public function falla()
    {
        return $this->belongsTo('App\Falla', 'idFallaFK');
    }
}
