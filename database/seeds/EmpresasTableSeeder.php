<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Empresa;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
    		'name'           => 'Asociación Cooperativa de Comercialización La Vega de R.L.',
    		'email'          => 'la_vega_cooperativa@gmail.com',
            'password'       => bcrypt('cooperativa'),
            'username'       => 'La Vega',
            'habilitar'      => 'true',
    		'remember_token' => 'xuwdwjhdke',
        ]);
        Empresa::create([
    		'rubro'          => 'Comercio',
            'id_user'        => '1',
            'forma_juridica' => 'Sociedad Anonima',
        ]);

        Empresa::create([
    		'rubro'          => 'alimentos',
            'id_user'        => '2',
            'forma_juridica' => 'Sociedad de responsabilidad limitada',
        ]);
        User::create([
    		'name'           => 'Acopanela de R.L.',
    		'email'          => 'acopanela@gmailcom',
            'password'       => bcrypt('acopanela'),
            'username'       => 'Acopanela',
            'habilitar'      => 'true',
    		'remember_token' => 'xuwdwjhdke',
        ]);

        Empresa::create([
    		'rubro'          => 'Instrumentos musicales',
            'id_user'        => '3',
            'forma_juridica' => 'Sociedad de responsabilidad limitada',
        ]);

        DB::table('role_user')->insert(['role_id' => '3','user_id'=>'2']);
        DB::table('role_user')->insert(['role_id' => '3','user_id'=>'3']);
    }
}
