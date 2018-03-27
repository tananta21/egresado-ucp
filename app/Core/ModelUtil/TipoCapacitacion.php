<?php

namespace App\Core\ModelUtil;

use Illuminate\Database\Eloquent\Model;

class TipoCapacitacion extends Model
{
    protected $table = 'tipo_capacitacion';

    public function capacitacion()
    {
        return $this->hasMany('App\Core\Capacitacion\Capacitacion');
    }
}
