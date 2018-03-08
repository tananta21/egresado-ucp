<?php

namespace App\Core\Idioma;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = 'idiomas';

    public function nivelCapacidad()
    {
        return $this->belongsTo('App\Core\ModelUtil\NivelCapacidad');
    }
}
