<?php

namespace App\Core\Escuela;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $table = 'escuela';

    public function carreraOferta()
    {
        return $this->hasMany('App\Core\ModelUtil\CarreraOferta');
    }
}
