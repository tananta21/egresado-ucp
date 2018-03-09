<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 09/03/2018
 * Time: 04:43 AM
 */

namespace App\Core\PostulanteOferta;


use App\Core\Contracts\BaseRepositoryInterface;

class PostulanteOfertaLaboralRepository implements BaseRepositoryInterface
{
    protected $postulante;

    public function __construct()
    {
        $this->postulante = new PostulanteOfertaLaboral();
    }

    public function createPostulanteOferta($egresado,$oferta){
        $new = $this->postulante;
        $new->egresado_id = $egresado;
        $new->oferta_laboral_id = $oferta;
        $new->is_active = true;
        $new->save();
    }
    public function allPostulantesByOferta($oferta){
        $query = \DB::select('SELECT
                                egresados.id as egresado_id,
                                egresados.dni as dni,
                                egresados.nombre as nombre_alumno,
                                egresados.apellido as apellido,
                                escuela.nombre as nombre_escuela
                            FROM
                                postulante_oferta_laboral
                            INNER JOIN egresados ON postulante_oferta_laboral.egresado_id = egresados.id
                            INNER JOIN escuela ON egresados.escuela_id = escuela.id
                            WHERE
                                postulante_oferta_laboral.oferta_laboral_id = '.$oferta.'');
        return $query;
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

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function deleted($id)
    {
        // TODO: Implement deleted() method.
    }
}