<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 09/02/2018
 * Time: 04:24 PM
 */

namespace App\Core\Referencia;


use App\Core\Contracts\BaseRepositoryInterface;

class ReferenciaRepository implements BaseRepositoryInterface
{
    protected $referencia;

    public function __construct()
    {
        $this->referencia = new Referencia();
    }

    public function allByEgresado($egresado_id)
    {
        return $this->referencia->where('egresado_id', $egresado_id)->orderBy('id', 'ASC')->get();
    }

    public function createReferencia($egresado_id, $attributes)
    {
        $item = $this->referencia;
        $item->egresado_id = $egresado_id;
        $item->empresa = $attributes['empresa'];
        $item->nombre = $attributes['nombre'];
        $item->puesto = $attributes['puesto'];
        $item->telefono = $attributes['telefono'];
        $item->email = $attributes['email'];
        $item->save();
        return $item;
    }


    public function all()
    {
        // TODO: Implement all() method.
    }

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    public function updated($id, array $attributes)
    {
        $item = $this->referencia->find($id);
        $item->empresa = $attributes['empresa'];
        $item->nombre = $attributes['nombre'];
        $item->puesto = $attributes['puesto'];
        $item->telefono = $attributes['telefono'];
        $item->email = $attributes['email'];
        $item->save();
        return $item;

    }

    public function find($id)
    {
        return $this->referencia->findOrFail($id);
    }

    public function deleted($id)
    {
        // TODO: Implement deleted() method.
    }
}