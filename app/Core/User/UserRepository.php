<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 31/01/2018
 * Time: 05:01 PM
 */

namespace App\Core\User;


use App\Core\Contracts\BaseRepositoryInterface;
use App\Helper\UtilHelper;
use App\User;

class UserRepository implements BaseRepositoryInterface
{
    protected $user;
    protected $utilHelper;

    public function __construct()
    {
        $this->user = new User();
        $this->utilHelper = new UtilHelper();
    }

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function crearUsuario($attributes, $url_imagen)
    {
        $nuevo = $this->user;
        $nuevo->tipo_usuario_id = config('global.user_egresado');
        $nuevo->egresado_id = $attributes['id'];
        $nuevo->slug = $this->utilHelper->createSlug($attributes['nombre']);
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

    public function updatedUser($id, $attributes)
    {
        $user = $this->user->findOrFail($id);
        $user->slug = $this->utilHelper->createSlug($attributes['nombre']);
        $user->nombre = $attributes['nombre'];
        $user->apellido = $attributes['apellido'];
        $user->email = $attributes['email'];
        $user->url_imagen = $attributes['url_imagen'];
        $user->save();
        return $user;
    }

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }


    public function updated($id, array $attributes)
    {
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