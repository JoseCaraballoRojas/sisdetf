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

    public function scopeBuscar($query, $texto)
    {
    	if ($texto !="") {
    		return $query->where('usuario', 'LIKE', "%$texto%")
    			->orWhere('estatus', 'LIKE', "%$texto%")
    			->orWhere('tipo', 'LIKE', "%$texto%");	
    	}
    	
    }
}
