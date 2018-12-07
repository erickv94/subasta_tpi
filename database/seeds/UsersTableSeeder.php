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
    		'name'           => 'Sivarcachadas Subastas',
    		'email'          => 'sivarcachadas@gmail.com',
            'password'       => bcrypt('admin'),
            'username'       => 'Sivarcachadas',
            'habilitar'      => 'true',
    		'remember_token' => 'qwertyuiop',
        ]);

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
        DB::table('role_user')->insert(['role_id' => '3','user_id'=>'1']);


        //Permisos de Empresas
        DB::table('permission_role')->insert(['permission_id' => '13' ,  'role_id'=>'3']);
        DB::table('permission_role')->insert(['permission_id' => '14' ,  'role_id'=>'3']);
        DB::table('permission_role')->insert(['permission_id' => '15' ,  'role_id'=>'3']);
        DB::table('permission_role')->insert(['permission_id' => '16' ,  'role_id'=>'3']);
        DB::table('permission_role')->insert(['permission_id' => '17' ,  'role_id'=>'3']);
        DB::table('permission_role')->insert(['permission_id' => '18' ,  'role_id'=>'3']);
        DB::table('permission_role')->insert(['permission_id' => '19' ,  'role_id'=>'3']);
           
    }
}
