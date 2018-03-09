<?php

namespace App\Core\ModelUtil;

use Illuminate\Database\Eloquent\Model;

class NivelCapacidad extends Model
{
    protected $table = 'nivel_capacidad';

    public function idioma()
    {
        return $this->hasMany('App\Core\Idioma\Idioma');
    }
    public function programaOferta()
    {
        return $this->hasMany('App\Core\ModelUtil\ProgramaOferta');
    }

    public function detallePrograma()
    {
        return $this->hasMany('App\Core\DetallePrograma\DetallePrograma');
    }
}
