<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'codigo'=> $faker->numberBetween(100000,999999),
        'nombre'=> $faker->sentence($nbWords = 3, $variableNbWords = true),
        'stock'=> $faker->numberBetween(1,5000),
        'tipo'=> $faker->randomElement([7,9,14,18]),
        'precio'=> $faker->numberBetween(100,1000),
        'categorias'=> $faker->randomElement(['Amor','Felicidades','Cumpleaños','Personajes']),
        'marca'=> $faker->randomElement(['Anagram','Convergram','Dilax','Tuki','Chino']),
        'sale'=> $faker->boolean(),
        'featured'=> $faker->boolean(),
    ];
});
