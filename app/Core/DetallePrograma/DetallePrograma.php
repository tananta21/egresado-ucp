<?php

namespace App\Core\DetallePrograma;

use Illuminate\Database\Eloquent\Model;

class DetallePrograma extends Model
{
    protected $table = 'detalle_programas';

    public function nivelCapacidad()
    {
        return $this->belongsTo('App\Core\ModelUtil\NivelCapacidad');
    }
    public function programa()
    {
        return $this->belongsTo('App\Core\Programa\Programa');
    }

}
