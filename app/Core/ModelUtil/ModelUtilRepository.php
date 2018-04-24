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
    protected $tipoExperiencia;
    protected $tipoCapacitacion;
    protected $nivelEstudio;
    protected $nivelCapacidad;
    protected $disponibilidad;
    protected $carreraOferta;
    protected $programaOferta;
    protected $institucion;
    protected $satisfaccion;
    protected $sectorTrabajo;
    protected $situacionLaboral;

    public function __construct()
    {
        $this->estadoCivil = new EstadoCivil();
        $this->tipoExperiencia = new TipoExperiencia();
        $this->tipoCapacitacion = new TipoCapacitacion();
        $this->nivelEstudio = new NivelEstudio();
        $this->nivelCapacidad = new NivelCapacidad();
        $this->disponibilidad = new DisponibilidadTrabajo();
        $this->carreraOferta = new CarreraOferta();
        $this->programaOferta = new ProgramaOferta();
        $this->institucion = new Institucion();
        $this->satisfaccion = new Satisfaccion();
        $this->sectorTrabajo = new SectorTrabajo();
        $this->situacionLaboral= new SituacionLaboral();
    }

    public function allEstadoCivil(){

        return $this->estadoCivil->all();
    }

    public function allTipoExperiencia(){

        return $this->tipoExperiencia->all();
    }

    public function allTipoCapacitacion(){

        return $this->tipoCapacitacion->all();
    }

    public function allNivelEstudio(){

        return $this->nivelEstudio->all();
    }
    public function allNivelCapacidad(){

        return $this->nivelCapacidad->all();
    }

    public function allDisponibilidad(){

        return $this->disponibilidad->all();
    }

    public function allCarreraOferta($oferta){
        return $this->carreraOferta->where('oferta_laboral_id', $oferta)->get();
    }
    public function allProgramaOferta($oferta){
        return $this->programaOferta->where('oferta_laboral_id', $oferta)->get();
    }

    public function allInstitucion(){
        return $this->institucion->all();
    }

    public function allSatisfaccion(){
        return $this->satisfaccion->all();
    }

    public function allSectorTrabajo(){
        return $this->sectorTrabajo->all();
    }

    public function allSituacionLaboral(){
        return $this->situacionLaboral->all();
    }

    public function createCarreraOferta($oferta, $data){

        $new =  $this->carreraOferta;
        $new->oferta_laboral_id = $oferta;
        $new->escuela_id = $data['escuela_id'];
        $new->save();
    }

    public function createProgramaOferta($oferta, $data){

        $new =  $this->programaOferta;
        $new->oferta_laboral_id = $oferta;
        $new->programa_id = $data['programa_id'];
        $new->nivel_capacidad_id = $data['nivel_capacidad_id'];
        $new->save();
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