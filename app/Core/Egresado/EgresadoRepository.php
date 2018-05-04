<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 31/01/2018
 * Time: 04:44 PM
 */

namespace App\Core\Egresado;


use App\Core\Contracts\BaseRepositoryInterface;
use App\Helper\UtilHelper;

class EgresadoRepository implements BaseRepositoryInterface
{
    protected $egresado;
    protected $utilHelper;

    public function __construct()
    {
        $this->egresado = new Egresado();
        $this->utilHelper = new UtilHelper();
    }

    public function all()
    {
        return $this->egresado->all()->paginate(15);
    }

    public function crearEgresado($attributes, $url_imagen){
        $nuevo = $this->egresado;
        $nuevo->slug = $this->utilHelper->createSlug($attributes['nombre']);
        $nuevo->escuela_id = $attributes['escuela_id'];
        $nuevo->codigo = $attributes['codigo'];
        $nuevo->nombre = $attributes['nombre'];
        $nuevo->apellido = $attributes['apellido'];
        $nuevo->url_imagen = $url_imagen;
        $nuevo->is_active = true;
        $nuevo->save();
        return $nuevo;
    }

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    public function updatedEgresado($id, $attributes, $url_imagen)
    {

        $egresado = $this->egresado->findOrFail($id);
        $egresado->slug = $this->utilHelper->createSlug($attributes['nombre']);
        $egresado->nombre = $attributes['nombre'];
        $egresado->apellido = $attributes['apellido'];
        $egresado->dni = $attributes['dni'];
        $egresado->nacionalidad = $attributes['nacionalidad'];
        $egresado->tel_fijo = $attributes['tel_fijo'];
        $egresado->tel_celular = $attributes['tel_celular'];
        $egresado->email = $attributes['email'];
        $egresado->pagina_web = $attributes['pagina_web'];
        $egresado->estado_civil = $attributes['estado_civil'];
        $egresado->direccion = $attributes['direccion'];
        $egresado->url_imagen = $url_imagen;
        $egresado->save();
        return $egresado;

    }
    public function updated($id, array $attributes)
    {
    }



    public function find($id)
    {
        return $this->egresado->findOrFail($id);
    }


    public function deleted($id)
    {
        // TODO: Implement deleted() method.
    }
}