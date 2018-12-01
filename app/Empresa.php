<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $table = 'empresas';
    protected $primaryKey = 'id_empresa';

    protected $fillable = [
        'forma_juridica', 'rubro', 'id_user'
    ];

    
    public function users()
    {
        //La empresa pertenece a un usuario
        return $this->belongsTo(User::class,'id_user','id');
    }
    public function productos()
    {
        //Muchos productos son de una empresa
        return $this->hasMany(Producto::class,'id_empresa','id_empresa');
    }

}
