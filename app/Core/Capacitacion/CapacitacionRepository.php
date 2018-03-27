<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 26/03/2018
 * Time: 09:20 PM
 */

namespace App\Core\Capacitacion;


use App\Core\Contracts\BaseRepositoryInterface;

class CapacitacionRepository implements BaseRepositoryInterface
{
    protected $capacitacion;

    public function __construct()
    {
        $this->capacitacion = new Capacitacion();
    }

    public function all()
    {
//        return $this->capacitacion->where('is_active', true)->get();
        return $this->capacitacion->all();
    }

    public function createCapacitacion($data)
    {
        $new = $this->capacitacion;
        $new->tipo_capacitacion_id = $data['tipo_capacitacion_id'];
        $new->nombre = $data['nombre'];
        $new->is_active = true;
        $new->save();

    }

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    public function updated($id, array $attributes)
    {
        $capacitacion = $this->capacitacion->find($id);
        $capacitacion->tipo_capacitacion_id = $attributes['tipo_capacitacion_id'];
        $capacitacion->nombre = $attributes['nombre'];
        $capacitacion->organizacion = $attributes['organizacion'];
        $capacitacion->inscripcion = $attributes['inscripcion'];
        $capacitacion->inicio_fin = $attributes['inicio_fin'];
        $capacitacion->sede = $attributes['sede'];
        $capacitacion->horario = $attributes['horario'];
        $capacitacion->objetivo = $attributes['objetivo'];
        $capacitacion->metodologia = $attributes['metodologia'];
        $capacitacion->dirigido = $attributes['dirigido'];
        $capacitacion->precio = $attributes['precio'];
        $capacitacion->lugar_contacto = $attributes['lugar_contacto'];
        $capacitacion->telefono = $attributes['telefono'];
        $capacitacion->celular = $attributes['celular'];
        $capacitacion->correo = $attributes['correo'];
        $capacitacion->is_active = $attributes['is_active'];
        $capacitacion->save();
    }

    public function find($id)
    {
        return $this->capacitacion->findOrFail($id);
    }

    public function deleted($id)
    {
        // TODO: Implement deleted() method.
    }
}