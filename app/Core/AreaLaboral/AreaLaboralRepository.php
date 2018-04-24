<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 23/04/2018
 * Time: 11:59 PM
 */

namespace App\Core\AreaLaboral;


use App\Core\Contracts\BaseRepositoryInterface;

class AreaLaboralRepository implements BaseRepositoryInterface
{
    protected $area_laboral;

    public function __construct()
    {
        $this->area_laboral = new AreaLaboral();
    }

    public function all()
    {

    }

    public function allByEscuela($escuela_id)
    {
        return $this->area_laboral
            ->where("escuela_id", $escuela_id)
            ->orderBy('nombre')
            ->get();
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