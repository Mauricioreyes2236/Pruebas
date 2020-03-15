<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;
    protected $table = 'usuario';
    protected $dates = ['deleted_at'];
    protected $primaryKey = ['id_usuario'];
    protected $fillable = [
      'id_usuario',
      'nombre_u',
      'ap_u',
      'am_u',
      'telefono',
      'direccion',
      'email'
    ];
}
