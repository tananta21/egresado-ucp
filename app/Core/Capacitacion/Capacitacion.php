<?php

namespace App\Core\Capacitacion;

use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    protected $table = 'capacitaciones';

    public function tipoCapacitacion()
    {
        return $this->belongsTo('App\Core\ModelUtil\TipoCapacitacion');
    }
}
