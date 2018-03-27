<?php

namespace App\Http\Controllers;

use App\Core\Capacitacion\CapacitacionRepository;
use App\Core\Egresado\EgresadoRepository;
use App\Core\Escuela\EscuelaRepository;
use App\Core\Facultad\FacultadRepository;
use App\Core\ModelUtil\ModelUtilRepository;
use App\Core\OfertaLaboral\OfertaLaboralRepository;
use App\Core\PostulanteOferta\PostulanteOfertaLaboralRepository;
use App\Core\SemestreAcademico\SemestreAcademicoRepository;
use App\Core\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class EgresadoController extends Controller
{
    protected $repoUser;
    protected $repoEgresado;
    protected $repoFacultad;
    protected $repoEscuela;
    protected $repoSemestre;
    protected $repoOfertaLaboral;
    protected $repoModelUtil;
    protected $repoPostulanteOferta;
    protected $repoCapacitacion;

    public function __construct()
    {
        $this->repoUser = new UserRepository();
        $this->repoEgresado = new EgresadoRepository();
        $this->repoFacultad = new FacultadRepository();
        $this->repoEscuela = new EscuelaRepository();
        $this->repoSemestre = new SemestreAcademicoRepository();
        $this->repoOfertaLaboral = new  OfertaLaboralRepository();
        $this->repoModelUtil = new  ModelUtilRepository();
        $this->repoPostulanteOferta = new  PostulanteOfertaLaboralRepository();
        $this->repoCapacitacion = new CapacitacionRepository();
    }

    public function index()
    {
        $egresados = $this->repoEgresado->all();
        return view('system.admin.lista_egresados',
            compact('egresados'));
    }

    public function nuevoEgresado(){
        $facultad = $this->repoFacultad->all();
        $escuela = $this->repoEscuela->all();
        $semestre = $this->repoSemestre->all();
        return View("system.admin.nuevo_egresado",
            compact('facultad', 'escuela', 'semestre'));
    }

    public function crearEgresado()
    {
        $data = Input::all();
        $url_imagen = "img/utils/empty_user.png";
        $egresado = $this->repoEgresado->crearEgresado($data, $url_imagen);
        $user = $this->repoUser->crearUsuario($egresado, $url_imagen);
        session()->flash('msg', 'El egresado ha sido registrado satisfactoriamente');
        return redirect()->route('lista_egresados');

    }
//    LISTAR OFERTAS LABORALES PARA EL EGRESADO

    public function ofertasLaborales(){
        $egresado_id = Auth::user()->egresado_id;
        $ofertas = $this->repoOfertaLaboral->allByEgresado($egresado_id);
        return view('system.egresado.ofertas_laborales.lista', compact('ofertas'));
    }

    public function ofertaLaboralResumen($id)
    {
        $oferta = $this->repoOfertaLaboral->find($id);
        $carreras = $this->repoModelUtil->allCarreraOferta($id);
        $programasByOferta = $this->repoModelUtil->allProgramaOferta($id);
        return view('system.egresado.ofertas_laborales.resumen_oferta', compact(
            'oferta','carreras','programasByOferta'
        ));

    }
    public function ofertaLaboralSendCurriculum($id)
    {
        $egresado_id = Auth::user()->egresado_id;
        $send_curriculum = $this->repoPostulanteOferta->createPostulanteOferta($egresado_id,$id);
        session()->flash('msg', 'se ha enviado tu curriculum satisfactoriamente!!');
        return Redirect::back();
//        return redirect()->action('EgresadoController@ofertasLaborales');
    }

//    LISTAR CAPACITACIONES PARA EL  EGRESAO

    public function capacitaciones(){
        $ofertas = $this->repoCapacitacion->all();
        return view('system.egresado.capacitacion.lista', compact('ofertas'));
    }

    public function capacitacionesResumen($id)
    {
        $capacitacion = $this->repoCapacitacion->find($id);
        return view('system.egresado.capacitacion.resumen', compact(
            'capacitacion'
        ));

    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
