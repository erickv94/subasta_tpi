<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Caffeinated\Shinobi\Traits\ShinobiTrait;

class User extends Authenticatable
{
    use Notifiable,ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','direccion','habilitar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function empresas()
    {
        //Relacionar con la tabla empresa
        return $this->hasOne(Empresa::class,'id_user','id');
    }
    public function clientes()
    {
       //Relacionar con la tabla cliente
       return $this->hasOne(Cliente::class,'id_user','id');
    }
    
}
