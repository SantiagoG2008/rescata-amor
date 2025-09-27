<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
    protected $primaryKey = 'id_estado';
    public $timestamps = false;
    protected $fillable = ['descripcion'];

    public function mascotas()
    {
        return $this->hasMany('App\Models\Mascota', 'estado_id', 'id_estado');
    }
}
