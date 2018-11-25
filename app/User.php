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
        'name', 'email', 'password','username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function scopeEmail($query, $email)
    {
        return $query->where('email', $email);
    }

    public function empresa()
    {
        //Relacionar con la tabla empresa
        return $this->hasOne('App\Empresa', 'id_user', 'id');
    }
    public function cliente()
    {
       //Relacionar con la tabla cliente
       return $this->hasOne('App\Cliente', 'id_user', 'id');
    }
    
}
