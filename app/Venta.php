<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venta extends Model
{
    use SoftDeletes;
    protected $table = 'venta';
    protected $dates = ['deleted_at'];
    protected $primaryKey = ['id_venta'];
    protected $fillable = [
      'id_venta',
      'id_usuario',
      'id_artesano',
      'id_producto'
    ];
}
