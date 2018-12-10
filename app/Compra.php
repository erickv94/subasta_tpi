<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Compra extends Model
{
    public $table='compras';
    protected $primaryKey='id';

    public function cliente(){
        return $this->belongsTo(Cliente::class,'id_cliente','id_cliente');
    }

    public function producto(){
        return $this->belongsTo(Producto::class,'id_producto','id_producto');
    }


}
