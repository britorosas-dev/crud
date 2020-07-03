<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Proveedor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'email' => $faker->companyEmail,
        'telefono' => $faker->tollFreePhoneNumber,
        'estatus' => $faker->randomElement(['Premium', 'Regular', 'Nuevo']),
        'pais' => $faker->country,
        'ciudad' => $faker->city,

    ];
});
