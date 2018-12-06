<?php

use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    $title = $faker->unique()->word(4);
    $codigo =$faker->unique()->randomNumber($nbDigits = NULL, $strict = false);
    return [
        'nombre_producto' => $title,
        'slug'   => str_slug($title.' '.$codigo),
        'codigo' => $codigo,
        'precio_inicial' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 80.20) ,
        'descripcion' => $faker->text(200),
        'id_empresa' =>rand(1,3),
        'id_categoria' =>rand(1,9),
        'file_img' => $faker->imageUrl($width=1200,$height=400),
        'fecha_publicacion' =>$faker->date,
        'fecha_expiracion' =>$faker->date,
        'publicacion' => true,
    ];
});
