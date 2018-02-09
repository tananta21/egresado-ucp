<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 09/02/2018
 * Time: 02:34 AM
 */

namespace App\Core\Estudio;


use App\Core\Contracts\BaseRepositoryInterface;

class EstudioRepository implements BaseRepositoryInterface
{
    protected $estudio;

    public function __construct()
    {
        $this->estudio = new Estudio();
    }


    public function allByEgresado($egresado_id)
    {
        return $this->estudio->where('egresado_id', $egresado_id)->orderBy('id', 'ASC')->get();
    }

    public function createEstudio($egresado_id, $attributes)
    {
        $item = $this->estudio;
        $item->egresado_id = $egresado_id;
        $item->nivel_estudio_id = $attributes['nivel_estudio_id'];
        $item->institucion = $attributes['institucion'];
        $item->carrera = $attributes['carrera'];
        $item->pais = $attributes['pais'];
        $item->inicio = $attributes['inicio'];
        $item->fin = $attributes['fin'];
        $item->estado_estudio = $attributes['estado_estudio'];
        $item->save();
        return $item;
    }

    public function all()
    {

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