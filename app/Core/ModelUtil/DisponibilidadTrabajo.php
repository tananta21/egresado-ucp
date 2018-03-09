<?php

namespace App\Core\ModelUtil;

use Illuminate\Database\Eloquent\Model;

class DisponibilidadTrabajo extends Model
{
    protected $table = 'disponibilidad_trabajo';

    public function ofertaLaboral()
    {
        return $this->hasMany('App\Core\OfertaLaboral\OfertaLaboral');
    }
}
