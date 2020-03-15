<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artesano extends Model
{
    use SoftDeletes;
    protected $table = 'artesano';
    protected $dates = ['deleted_at'];
    protected $primaryKey = ['id_artesano'];
    protected $fillable = [
      'id_artesano',
      'nombre_a',
      'ap_a',
      'am_a',
      'edad',
      'telefono',
      'email'
      ];
}
