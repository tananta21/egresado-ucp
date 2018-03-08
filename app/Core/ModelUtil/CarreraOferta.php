<?php

namespace App\Core\ModelUtil;

use Illuminate\Database\Eloquent\Model;

class CarreraOferta extends Model
{
    protected $table = 'carreras_oferta';

    public function escuela()
    {
        return $this->belongsTo('App\Core\Escuela\Escuela');
    }

}
