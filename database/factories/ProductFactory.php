<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'codigo'=> $faker->numberBetween(100000,999999),
        'nombre'=> $faker->sentence($nbWords = 4, $variableNbWords = true),
        'stock'=> $faker->numberBetween(1,5000),
        'tipo'=> $faker->numberBetween(7,14),
        'precio'=> $faker->numberBetween(100,1000),
        'categorias'=> $faker->words($nb=3, $asText=false),
        'marca'=> $faker->word
    ];
});
