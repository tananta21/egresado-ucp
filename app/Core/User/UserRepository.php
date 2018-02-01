<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 31/01/2018
 * Time: 05:01 PM
 */

namespace App\Core\User;


use App\Core\Contracts\BaseRepositoryInterface;
use App\User;

class UserRepository implements BaseRepositoryInterface
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function crearUsuario($attributes, $url_imagen)
    {
        $nuevo = $this->user;
        $nuevo->codigo = $attributes['codigo'];
        $nuevo->nombre = $attributes['nombre'];
        $nuevo->apellido = $attributes['apellido'];
        $nuevo->apellido = $attributes['apellido'];
        $nuevo->password = \Hash::make($attributes['codigo']);
        $nuevo->url_imagen = $url_imagen;
        $nuevo->is_active = true;
        $nuevo->save();
        return $nuevo;

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