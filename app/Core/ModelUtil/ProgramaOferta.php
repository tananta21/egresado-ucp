<?php

namespace App\Core\ModelUtil;

use Illuminate\Database\Eloquent\Model;

class ProgramaOferta extends Model
{
    protected $table = 'programa_ofertas';

    public function programa()
    {
        return $this->belongsTo('App\Core\Programa\Programa');
    }

    public function nivelCapacidad()
    {
        return $this->belongsTo('App\Core\ModelUtil\NivelCapacidad');
    }
}
