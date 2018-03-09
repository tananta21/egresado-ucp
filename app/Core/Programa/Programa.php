<?php

namespace App\Core\Programa;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';

    public function programaOferta()
    {
        return $this->hasMany('App\Core\ModelUtil\ProgramaOferta');
    }

    public function detallePrograma()
    {
        return $this->hasMany('App\Core\DetallePrograma\DetallePrograma');
    }


}
