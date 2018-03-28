<?php

namespace App\Core\ModelUtil;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = 'instituciones';

    public function postulanteCapacitacion()
    {
        return $this->hasMany('App\Core\PostulanteCapacitacion\PostulanteCapacitacion');
    }
}
