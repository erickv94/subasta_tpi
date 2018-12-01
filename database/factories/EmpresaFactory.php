<?php

use Faker\Generator as Faker;

$factory->define(App\Empresa::class, function (Faker $faker) {
    return [
        'denominacion' => $faker->company,
        'rubro' => $faker->jobTitle,
        'id_user' => $faker->unique()->numberBetween($min = 12, $max = 21),
        'habilitar' => $faker->boolean,
    ];
});
