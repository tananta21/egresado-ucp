<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 31/01/2018
 * Time: 04:52 PM
 */

namespace App\Core\SemestreAcademico;


use App\Core\Contracts\BaseRepositoryInterface;

class SemestreAcademicoRepository implements BaseRepositoryInterface
{
    protected $semestre;

    public function __construct()
    {
        $this->semestre = new SemestreAcademico();
    }

    public function all()
    {
        return $this->semestre->all();
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