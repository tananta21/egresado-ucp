<?php

namespace App\Core\PostulanteCapacitacion;

use Illuminate\Database\Eloquent\Model;

class PostulanteCapacitacion extends Model
{
    protected $table = 'postulante_capacitacion';

    public function institucion()
    {
        return $this->belongsTo('App\Core\ModelUtil\Institucion');
    }
}
