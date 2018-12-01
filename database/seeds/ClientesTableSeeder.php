<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Cliente;
class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
    		'name'           => 'Jennifer',
    		'email'          => 'jennifer_zometa@gmail.com',
            'password'       => bcrypt('jennifer'),
            'username'       => 'Jennifer',
            'habilitar'      => 'true',
    		'remember_token' => 'xuwdwjhdke',
        ]);

        Cliente::create([
            'telefono'          => '(503)77889950',
            'id_user'           => '4',
        ]);
        User::create([
    		'name'           => 'Celina',
    		'email'          => 'celina@yahoo.com',
            'password'       => bcrypt('celina'),
            'username'       => 'Celina',
            'habilitar'      => 'false',
    		'remember_token' => 'xuwdwjhdke',
        ]);

        Cliente::create([
            'telefono'          => '(503)77888950',
            'id_user'           => '5',
        ]);

        DB::table('role_user')->insert(['role_id' => '2','user_id'=>'4']);
        DB::table('role_user')->insert(['role_id' => '2','user_id'=>'5']);
        
    }
    
}
