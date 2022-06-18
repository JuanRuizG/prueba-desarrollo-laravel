<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'referencia' => $faker->word,
        'precio' => $faker->numberBetween(10000,700000),
        'peso' => $faker->numberBetween(50,100),
        'categoria_id' => rand(1, 13),
        'stock' => rand(1, 200),
        'fecha_Creacion' => Carbon::createFromTimeStamp($faker->dateTimeBetween('now', '+7 days')->getTimestamp())
    ];
});
