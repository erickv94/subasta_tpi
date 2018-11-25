<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  public $table = 'clientes';
  protected $primaryKey = 'id_cliente';
}
