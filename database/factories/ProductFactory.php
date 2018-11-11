<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'code'                  => $faker->unixTime,
        'name_product'          => $faker->sentence,
        'description_product'   => $faker->sentence,

    ];
});
