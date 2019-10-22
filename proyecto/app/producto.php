<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
        protected $stable='proveedor';
        protected $fillable=[
    	'codigo',
    	'nombre',
    	'proveedor',
    	'ubicacion',
    	'costo',
    	'precio_venta'
    ];

}
