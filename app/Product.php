<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'codigo','nombre', 'imagen', 'stock','tipo','precio','categorias', 'marca', 'sale', 'featured'
    ];
}
