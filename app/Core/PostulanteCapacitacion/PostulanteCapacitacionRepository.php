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
        // TODO: Implement deleted() method.
    }
}