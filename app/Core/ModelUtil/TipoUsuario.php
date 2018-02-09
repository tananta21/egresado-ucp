<?php

namespace App\Core\ModelUtil;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'tipo_usuarios';

    public function usuario()
    {
        return $this->hasMany('App\User');
    }
}
