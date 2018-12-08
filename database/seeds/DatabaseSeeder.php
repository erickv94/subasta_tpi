<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        //this->call(ProductoTableSeeder::class);
    }
}
