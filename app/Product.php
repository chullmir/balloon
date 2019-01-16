<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'codigo','nombre','stock','tipo','precio','marca','categorias'
    ];
}
