<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;
    protected $table = 'producto';
    protected $dates = ['deleted_at'];
    protected $primaryKey = ['id_producto'];
    protected $fillable = [
      'id_producto',
      'nombre_p',
      'costo',
      'descripcion'
    ];
}
