<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 09/02/2018
 * Time: 01:45 AM
 */

namespace App\Core\ExperienciaLaboral;


use App\Core\Contracts\BaseRepositoryInterface;

class ExperienciaLaboralRepository implements BaseRepositoryInterface
{
    protected $experiencia;

    public function __construct()
    {
        $this->experiencia = new ExperienciaLaboral();
    }


    public function allByEgresado($egresado_id)
    {
        return $this->experiencia->where('egresado_id', $egresado_id)->orderBy('id', 'ASC')->get();
    }

    public function all()
    {

    }


    public function createExperiencia($egresado_id, $attributes)
    {
        $item = $this->experiencia;
        $item->egresado_id = $egresado_id;
        $item->tipo_experiencia_id = $attributes['tipo_experiencia_id'];
        $item->empresa = $attributes['empresa'];
        $item->rubro = $attributes['rubro'];
        $item->puesto = $attributes['puesto'];
//        $item->nivel_puesto = $attributes['nivel_puesto'];
        $item->area_laboral = $attributes['area_laboral'];
        $item->salario = $attributes['salario'];
        $item->inicio = $attributes['inicio'];
        $item->fin = $attributes['fin'];
        $item->descripcion = $attributes['descripcion'];
        $item->estado_trabajo = $attributes['estado_trabajo'];
        $item->save();
        return $item;
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