<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tienda extends Model
{
    protected $stable='tienda';

    protected $fillable=[
    	'id',
    	'nombre',
    	'nit',
    	'encargado_id',
    	'ubicacion',
    	'capacidad'
    ];
}
