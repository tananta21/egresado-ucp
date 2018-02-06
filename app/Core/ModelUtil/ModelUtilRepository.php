<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 05/02/2018
 * Time: 09:05 PM
 */

namespace App\Core\ModelUtil;


use App\Core\Contracts\BaseRepositoryInterface;

class ModelUtilRepository implements BaseRepositoryInterface
{
    protected $estadoCivil;

    public function __construct()
    {
        $this->estadoCivil = new EstadoCivil();
    }

    public function allEstadoCivil(){

        return $this->estadoCivil->all();
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