<?php

namespace App\Http\Controllers;

use App\Core\Egresado\EgresadoRepository;
use App\Core\Escuela\EscuelaRepository;
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

    public function __construct()
    {
        $this->repoUser = new UserRepository();
        $this->repoEgresado = new EgresadoRepository();
        $this->repoFacultad = new FacultadRepository();
        $this->repoEscuela = new EscuelaRepository();
        $this->repoSemestre = new SemestreAcademicoRepository();
        $this->repoModelUtil = new ModelUtilRepository();
        $this->utilHelper = new UtilHelper();
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


    public function listaExperiencia()
    {
        return view('system.egresado.curriculum.experiencia.lista');
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
