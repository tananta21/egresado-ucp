<?php

namespace App\Http\Controllers;

use App\Core\Egresado\EgresadoRepository;
use App\Core\Escuela\EscuelaRepository;
use App\Core\Estudio\EstudioRepository;
use App\Core\ExperienciaLaboral\ExperienciaLaboralRepository;
use App\Core\Facultad\FacultadRepository;
use App\Core\ModelUtil\ModelUtilRepository;
use App\Core\SemestreAcademico\SemestreAcademicoRepository;
use App\Core\User\UserRepository;
use App\Helper\UtilHelper;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CurriculumController extends Controller
{
    protected $repoUser;
    protected $repoEgresado;
    protected $repoFacultad;
    protected $repoEscuela;
    protected $repoSemestre;
    protected $repoModelUtil;
    protected $utilHelper;
    protected $repoExperiencia;
    protected $repoEstudio;

    public function __construct()
    {
        $this->repoUser = new UserRepository();
        $this->repoEgresado = new EgresadoRepository();
        $this->repoFacultad = new FacultadRepository();
        $this->repoEscuela = new EscuelaRepository();
        $this->repoSemestre = new SemestreAcademicoRepository();
        $this->repoModelUtil = new ModelUtilRepository();
        $this->utilHelper = new UtilHelper();
        $this->repoExperiencia = new ExperienciaLaboralRepository();
        $this->repoEstudio = new EstudioRepository();
    }

    public function datosPersonales()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')){
            $egresado_id = Auth::user()->egresado_id;
            $egresado = $this->repoEgresado->find($egresado_id);
            $estados = $this->repoModelUtil->allEstadoCivil();
            return view('system.egresado.curriculum.datos_personales',
                compact('egresado', 'estados'));
        }
        else{
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }
    public function updateDatosPersonales(Request $request)
    {
        $egresado_id = Auth::user()->egresado_id;
        $data = Input::all();
        $image = $request->file('image');
        $url_imagen =$this->utilHelper->saveImageAtractivo($image);
        $egresado = $this->repoEgresado->updatedEgresado($egresado_id, $data, $url_imagen);
        $user = $this->repoUser->updatedUser(Auth::user()->id, $egresado);
        session()->flash('msg', 'Datos guardados satisfactoriamente');
        return Redirect::back();
    }

//    EXPERIENCIA LABORAL ======================================================
    public function listaExperiencia()
    {
        $egresado_id = Auth::user()->egresado_id;
        $items = $this->repoExperiencia->allByEgresado($egresado_id);
        return view('system.egresado.curriculum.experiencia.lista',
            compact('items'));
    }
    public function nuevaExperiencia()
    {
        $tipoExperiencias = $this->repoModelUtil->allTipoExperiencia();
        return view('system.egresado.curriculum.experiencia.nuevo',
            compact('tipoExperiencias'));
    }
    public function createExperiencia()
    {
        $data = Input::all();
        $egresado_id = Auth::user()->egresado_id;
        $experiencia = $this->repoExperiencia->createExperiencia($egresado_id, $data);
        session()->flash('msg', 'Datos guardados satisfactoriamente');
        return redirect()->route('experiencia_laboral');
    }

//    ESTUDIOS ======================================================
    public function listaEstudio()
    {
        $egresado_id = Auth::user()->egresado_id;
        $items = $this->repoEstudio->allByEgresado($egresado_id);
        return view('system.egresado.curriculum.estudios.lista',
            compact('items'));
    }

    public function nuevoEstudio()
    {
        $nivelEstudio = $this->repoModelUtil->allNivelEstudio();
        return view('system.egresado.curriculum.estudios.nuevo',
            compact('nivelEstudio'));
    }

    public function createEstudio()
    {
        $data = Input::all();
        $egresado_id = Auth::user()->egresado_id;
        $experiencia = $this->repoEstudio->createEstudio($egresado_id, $data);
        session()->flash('msg', 'Datos guardados satisfactoriamente');
        return redirect()->route('egresado_estudio');
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
