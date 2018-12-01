<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre_categoria' =>  'Joyeria y relojes',
            'slug'           => str_slug('Joyeria y relojes'),
        ]);
        Categoria::create([
            'nombre_categoria' =>  'Comics',
            'slug'           => str_slug('Comics'),
        ]);
        Categoria::create([
            'nombre_categoria' =>  'Libros',
            'slug'           => str_slug('Libros'),
        ]);
        Categoria::create([
            'nombre_categoria' =>  'Electronica',
            'slug'           => str_slug('Electronica'),
        ]);
        Categoria::create([
            'nombre_categoria' =>  'Arte Moderno',
            'slug'           => str_slug('Arte Moderno'),
        ]);
        Categoria::create([
            'nombre_categoria' =>  'Antiguedades',
            'slug'           => str_slug('Antiguedades'),
        ]);
        Categoria::create([
            'nombre_categoria' =>  'Moda',
            'slug'           => str_slug('Moda'),
        ]);
        Categoria::create([
            'nombre_categoria' =>  'Monedas',
            'slug'           => str_slug('Monedas'),
        ]);
        Categoria::create([
            'nombre_categoria' =>  'Musica',
            'slug'           => str_slug('Musica'),
        ]);
        Categoria::create([
            'nombre_categoria' =>  'Otros',
            'slug'           => str_slug('Otros'),
        ]);
    }
}
