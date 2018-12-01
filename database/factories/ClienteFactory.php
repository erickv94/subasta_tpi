<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'fecha_nacimiento' => $faker->dateTimeBetween('-40 years', '-18 years'),
        'direccion' => $faker->streetAddress,
        'telefono' => $faker->phoneNumber,
        'id_user' =>$faker->unique()->numberBetween($min = 2, $max = 11),
        'habilitar' => $faker->boolean,

    ];
});
