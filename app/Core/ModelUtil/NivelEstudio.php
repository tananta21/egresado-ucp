<?php

namespace App\Core\ModelUtil;

use Illuminate\Database\Eloquent\Model;

class NivelEstudio extends Model
{
    protected $table = 'nivel_estudio';

    public function estudio()
    {
        return $this->hasMany('App\Core\Estudio\Estudio');
    }
}
