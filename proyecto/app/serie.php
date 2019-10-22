<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serie extends Model
{

    protected $stable='proveedor';
        protected $fillable=[
    	'id',
    	'serie'
    ];
}
