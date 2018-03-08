<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 09/02/2018
 * Time: 03:56 PM
 */

namespace App\Core\Programa;


use App\Core\Contracts\BaseRepositoryInterface;

class ProgramaRepository implements BaseRepositoryInterface
{
    protected $programa;

    public function __construct()
    {
        $this->programa = new Programa();
    }

    public function allProgramas(){
        return $this->programa->all();
    }

    public function allByEgresado($egresado_id)
    {
        return $this->programa->where('egresado_id', $egresado_id)->orderBy('id', 'ASC')->get();
    }

    public function createPrograma($egresado_id, $attributes)
    {
        $item = $this->programa;
        $item->egresado_id = $egresado_id;
        $item->nivel_capacidad_id = $attributes['nivel_capacidad_id'];
        $item->nombre = $attributes['nombre'];
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
        $item = $this->programa->find($id);
        $item->delete();
    }
}