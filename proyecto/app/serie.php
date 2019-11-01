<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serie extends Model
{

    protected $stable='serie';
        protected $fillable=[
    	'id',
    	'serie'
    ];
}
