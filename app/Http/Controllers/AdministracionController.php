<?php

namespace App\Http\Controllers;

use App\Core\Escuela\EscuelaRepository;
use App\Core\ModelUtil\ModelUtilRepository;
use App\Core\OfertaLaboral\OfertaLaboralRepository;
use App\Core\PostulanteOferta\PostulanteOfertaLaboralRepository;
use App\Core\Programa\ProgramaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdministracionController extends Controller
{
    protected $repoOfertaLaboral;
    protected $repoModelUtil;
    protected $repoEscuela;
    protected $repoPrograma;
    protected $repoPostulanteOferta;

    public function __construct()
    {
        $this->repoOfertaLaboral = new  OfertaLaboralRepository();
        $this->repoModelUtil = new  ModelUtilRepository();
        $this->repoEscuela = new EscuelaRepository();
        $this->repoPrograma = new ProgramaRepository();
        $this->repoPostulanteOferta = new PostulanteOfertaLaboralRepository();
    }

    public function index()
    {
        return view('system.admin.content_admin.inicio_admin');
    }

    //oferta laboral

    public function ofertaLaboralList()
    {
        $disponibilidad = $this->repoModelUtil->allDisponibilidad();
        $ofertas = $this->repoOfertaLaboral->all();
        return view('system.admin.content_admin.oferta_laboral.list', compact(
            'ofertas','disponibilidad'
        ));
    }
    public function ofertaLaboralCreate()
    {
        $data = Input::all();
        $oferta = $this->repoOfertaLaboral->createOfertaLaboral($data);
        session()->flash('msg', 'Oferta guardada satisfactoriamente!!');
        return Redirect::back();
    }
    public function ofertaLaboralRequisito($id)
    {
        $oferta = $this->repoOfertaLaboral->find($id);
        $escuelas = $this->repoEscuela->all();
        $carreras = $this->repoModelUtil->allCarreraOferta($id);
        $programasByOferta = $this->repoModelUtil->allProgramaOferta($id);
        $programas = $this->repoPrograma->allProgramas();
        $nivelCapacidad = $this->repoModelUtil->allNivelCapacidad();
        return view('system.admin.content_admin.oferta_laboral.requisito', compact(
            'escuelas', 'oferta','carreras','programasByOferta','programas','nivelCapacidad'
        ));
    }

    public function ofertaLaboralRequisitoUpdate($id){
        $data = Input::all();
        $oferta = $this->repoOfertaLaboral->updated($id,$data);
        session()->flash('msg', 'Datos actualizados correctamente!!');
        return Redirect::back();

    }

    public function ofertaLaboralCarreraCreate($id)
    {
        $data = Input::all();
        $carrera = $this->repoModelUtil->createCarreraOferta($id, $data);
        session()->flash('msg', 'se ha registrado correctamente!!');
        return Redirect::back();
    }

    public function ofertaLaboralProgramaCreate($id)
    {
        $data = Input::all();
        $programa = $this->repoModelUtil->createProgramaOferta($id, $data);
        session()->flash('msg', 'se ha registrado correctamente!!');
        return Redirect::back();
    }

    public function ofertaLaboralResumen($id)
    {
        $oferta = $this->repoOfertaLaboral->find($id);
        $carreras = $this->repoModelUtil->allCarreraOferta($id);
        $programasByOferta = $this->repoModelUtil->allProgramaOferta($id);
        return view('system.admin.content_admin.oferta_laboral.resumen_oferta', compact(
            'oferta','carreras','programasByOferta'
        ));

    }

    public function ofertaLaboralPostulantes($id)
    {
        $postulantes = $this->repoPostulanteOferta->allPostulantesByOferta($id);
        return view('system.admin.content_admin.oferta_laboral.postulantes', compact(
            'postulantes'
        ));

    }






    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
