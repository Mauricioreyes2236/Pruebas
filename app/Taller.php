<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taller extends Model
{
    use SoftDeletes;
    protected $table = 'taller';
    protected $dates = ['deleted_at'];
    protected $primaryKey = ['id_taller'];
    protected $fillable = [
      'id_taller',
      'nombre_t',
      'direccion',
      'telefono',
      'id_artesano'
    ];
}
