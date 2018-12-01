<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = 'categorias';
    protected $primaryKey = 'id_categoria';

    protected $fillable = [
        'nombre_categoria', 'slug','descripcion'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class,'id_categoria','id_categoria');
    }
    
}
