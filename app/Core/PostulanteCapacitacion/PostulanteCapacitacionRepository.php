<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 26/03/2018
 * Time: 11:24 PM
 */

namespace App\Core\PostulanteCapacitacion;


use App\Core\Contracts\BaseRepositoryInterface;

class PostulanteCapacitacionRepository implements BaseRepositoryInterface
{
    protected $postulante;

    public function __construct()
    {
        $this->postulante = new  PostulanteCapacitacion();
    }

    public function all()
    {
        return $this->postulante->all();
    }

    public function createPostulante($id,$data)
    {
        $new = $this->postulante;
        $new->capacitacion_id = $id;
        $new->institucion_id = $data['institucion_id'];
        $new->nro_documento = $data['nro_documento'];
        $new->nombre = $data['nombre'];
        $new->apellido = $data['apellido'];
        $new->correo = $data['correo'];
        $new->telefono = $data['telefono'];
        $new->is_active = true;
        $new->save();

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