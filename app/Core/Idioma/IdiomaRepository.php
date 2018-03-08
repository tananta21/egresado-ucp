<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 09/02/2018
 * Time: 02:42 PM
 */

namespace App\Core\Idioma;


use App\Core\Contracts\BaseRepositoryInterface;

class IdiomaRepository implements BaseRepositoryInterface
{
    protected $idioma;

    public function __construct()
    {
        $this->idioma = new Idioma();
    }

    public function allByEgresado($egresado_id)
    {
        return $this->idioma->where('egresado_id', $egresado_id)->orderBy('id', 'ASC')->get();
    }

    public function createIdioma($egresado_id, $attributes)
    {
        $item = $this->idioma;
        $item->egresado_id = $egresado_id;
        $item->nivel_capacidad_id = $attributes['nivel_capacidad_id'];
        $item->nombre = $attributes['nombre'];
        $item->save();
        return $item;
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
        $item = $this->idioma->find($id);
        $item->delete();

    }
}