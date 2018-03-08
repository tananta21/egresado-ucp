<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 05/03/2018
 * Time: 02:50 PM
 */

namespace App\Core\OfertaLaboral;


use App\Core\Contracts\BaseRepositoryInterface;

class OfertaLaboralRepository implements BaseRepositoryInterface
{
    protected $oferta;

    public function __construct()
    {
        $this->oferta = new OfertaLaboral();
    }

    public function all()
    {
        return $this->oferta->all();
    }

    public function createOfertaLaboral($data)
    {
        $new = $this->oferta;
        $new->disponibilidad_id = $data['disponibilidad_id'];
        $new->nombre_empresa = $data['nombre_empresa'];
        $new->ruc_empresa = $data['ruc_empresa'];
        $new->cargo = $data['cargo'];
        $new->nro_vacantes = $data['nro_vacantes'];
        $new->area = $data['area'];
        $new->duracion = $data['duracion'];
        $new->salario = $data['salario'];
        $new->comentario = $data['comentario'];
        $new->movilidad = false;
        $new->is_active = true;
        $new->save();

    }
    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }


    public function updated($id, array $attributes)
    {
        $oferta = $this->oferta->find($id);
        $oferta->estudios_minimo = $attributes['estudios_minimo'];
        $oferta->caracteristicas = $attributes['caracteristicas'];
        $oferta->experiencia_minima = $attributes['experiencia_minima'];
        $oferta->movilidad = $attributes['movilidad'];
        $oferta->movilidad = $attributes['movilidad'];
        $oferta->save();
    }

    public function find($id)
    {
        return $this->oferta->findOrFail($id);
    }

    public function deleted($id)
    {
        // TODO: Implement deleted() method.
    }
}