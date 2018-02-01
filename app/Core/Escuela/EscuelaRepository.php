<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 31/01/2018
 * Time: 04:51 PM
 */

namespace App\Core\Escuela;


use App\Core\Contracts\BaseRepositoryInterface;

class EscuelaRepository implements BaseRepositoryInterface
{
    protected $escuela;

    public function __construct()
    {
        $this->escuela = new Escuela();
    }

    public function all()
    {
        return $this->escuela->all();
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