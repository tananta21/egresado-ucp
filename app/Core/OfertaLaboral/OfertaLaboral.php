<?php

namespace App\Core\OfertaLaboral;

use Illuminate\Database\Eloquent\Model;

class OfertaLaboral extends Model
{
    protected $table = 'oferta_laboral';

    public function disponibilidad()
    {
        return $this->belongsTo('App\Core\ModelUtil\DisponibilidadTrabajo');
    }

}
