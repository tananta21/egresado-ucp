<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 31/01/2018
 * Time: 04:44 PM
 */

namespace App\Core\Egresado;


use App\Core\Contracts\BaseRepositoryInterface;
use App\Helper\UtilHelper;

class EgresadoRepository implements BaseRepositoryInterface
{
    protected $egresado;
    protected $utilHelper;

    public function __construct()
    {
        $this->egresado = new Egresado();
        $this->utilHelper = new UtilHelper();
    }

    public function all()
    {
        return $this->egresado->all();
    }

    public function crearEgresado($attributes, $url_imagen){
        $nuevo = $this->egresado;
        $nuevo->slug = $this->utilHelper->createSlug($attributes['nombre']);
        $nuevo->escuela_id = $attributes['escuela_id'];
        $nuevo->codigo = $attributes['codigo'];
        $nuevo->nombre = $attributes['nombre'];
        $nuevo->apellido = $attributes['apellido'];
        $nuevo->url_imagen = $url_imagen;
        $nuevo->is_active = true;
        $nuevo->save();
        return $nuevo;
    }

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    public function updated($id, array $attributes)
    {
        // TODO: Implement updated() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function deleted($id)
    {
        // TODO: Implement deleted() method.
    }
}