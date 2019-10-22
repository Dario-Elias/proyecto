<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $stable='proveedor';
        protected $fillable=[
    	'nit',
    	'nombre',
    	'telefono',
    	'direccion'
    ];

}
