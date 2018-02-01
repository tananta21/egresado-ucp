<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 31/01/2018
 * Time: 04:50 PM
 */

namespace App\Core\Facultad;


use App\Core\Contracts\BaseRepositoryInterface;

class FacultadRepository implements BaseRepositoryInterface
{
    protected $facultad;

    public function __construct()
    {
        $this->facultad = new Facultad();
    }

    public function all()
    {
        return $this->facultad->all();
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