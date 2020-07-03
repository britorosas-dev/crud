<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(\App\Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'descripcion' => $faker->sentence,
        'foto' => $faker->randomElement(['productoDemo1.jpg', 'productoDemo2.jpg']),
        'envio' => $faker->randomElement(['De Pago','Gratis']),
        'condicion' => $faker->randomElement(['Nuevo', 'Usado']),
        'precio_venta' => $faker->randomFloat(3, 0, NULL),
        'proveedor_id' => \App\Proveedor::all()->random()->id
    ];
});
