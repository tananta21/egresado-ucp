<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 28/03/2018
 * Time: 03:14 PM
 */

namespace App\Core\SeguimientoEgresado;


use App\Core\Contracts\BaseRepositoryInterface;

class SeguimientoEgresadoRepository implements BaseRepositoryInterface
{
    protected $seguimiento;

    public function __construct()
    {
        $this->seguimiento = new SeguimientoEgresado();
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

    public function findByEgresado($egresado_id)
    {
        return $this->seguimiento->where('egresado_id',$egresado_id)->get();
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