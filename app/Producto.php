<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'codigo', 'nombre_producto', 'id_categoria','precio_inicial','fecha_publicacion','fecha_expiracion',
        'slug', 'file_img','publicado'
    ];
    public function categorias()
    {
        return $this->belongsTo(Categoria::class,'id_categoria','id_categoria');
    }
    public function empresas()
    {
        return $this->belongsTo(Empresa::class,'id_empresa','id_empresa');
    }
   
}
