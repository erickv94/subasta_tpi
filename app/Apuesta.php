<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    public $table='subastas';
    protected $primaryKey='id';

    public function producto(){
        return  $this->belongsTo(Producto::class,'id_producto','id_producto');
    }
    public function cliente(){
        return  $this->belongsTo(Cliente::class,'id_cliente','id_cliente');
    }
}
