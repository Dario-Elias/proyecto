<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $stable='empleado';

    protected $fillable=[
    	'cui',
    	'nombre',
    	'apellido',
    	'email',
    	'direccion',
    	'telefono_casa',
    	'telefono_movil'
    ];
}
