<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    
      protected $stable='empleado';

    protected $fillable=[
        'id',
    	'tienda',
    	'venta_total',
    	'id_empleado'
    ];
}

