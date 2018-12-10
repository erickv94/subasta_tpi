<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  public $table = 'clientes';
  protected $primaryKey = 'id_cliente';


  protected $fillable = [
    'fecha_nacimiento', 'telefono', 'id_user'
  ];


  public function users()
  {
    return $this->belongsTo(User::class,'id_user','id');
  }

  public function compras(){
    return $this->hasMany(compras::class,'id_cliente', 'id_cliente');
  }

  public function apuestas(){
    return $this->hasMany(Apuesta::class,'id_cliente','id_cliente');
  }
}
