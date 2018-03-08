<?php

namespace App\Core\Estudio;

use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    protected $table = 'estudios';

    public function nivelEstudio()
    {
        return $this->belongsTo('App\Core\ModelUtil\NivelEstudio');
    }
}
