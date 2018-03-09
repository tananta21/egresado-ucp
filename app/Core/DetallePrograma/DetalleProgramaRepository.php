<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 09/03/2018
 * Time: 04:29 PM
 */

namespace App\Core\DetallePrograma;


use App\Core\Contracts\BaseRepositoryInterface;

class DetalleProgramaRepository implements BaseRepositoryInterface
{
    protected $detallePrograma;

    public function __construct()
    {
        $this->detallePrograma = new DetallePrograma();
    }

    public function allByEgresado($egresado_id)
    {
        return $this->detallePrograma->where('egresado_id', $egresado_id)->orderBy('id', 'ASC')->get();
    }

    public function createPrograma($egresado_id, $attributes)
    {
        $item = $this->detallePrograma;
        $item->egresado_id = $egresado_id;
        $item->programa_id = $attributes['programa_id'];
        $item->nivel_capacidad_id = $attributes['nivel_capacidad_id'];
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
        // TODO: Implement updated() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function deleted($id)
    {
        $item = $this->detallePrograma->find($id);
        $item->delete();
    }
}