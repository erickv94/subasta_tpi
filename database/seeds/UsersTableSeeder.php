<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
    		'name'           => 'Administrador',
    		'email'          => 'administrador@administrador',
            'password'       => bcrypt('admin'),
            'username'       => 'Administrador',
    		'remember_token' => 'qwertyuiop',
        ]);
        factory(App\User::class,20)->create();

        Role::create([
            'name'      =>  'Admin',
            'slug'      =>  'admin',
            'special'   =>  'all-access',
        ]);
        Role::create([
            'name'      =>  'Cliente',
            'slug'      =>  'cliente',
        ]);
        Role::create([
            'name'      =>  'Empresa',
            'slug'      =>  'empresa',
        ]);
        DB::table('role_user')->insert(['role_id' => '1','user_id'=>'1']);

    }
}
