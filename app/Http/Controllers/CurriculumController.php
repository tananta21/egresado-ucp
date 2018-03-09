<?php

namespace App\Http\Controllers;

use App\Core\DetallePrograma\DetalleProgramaRepository;
use App\Core\Egresado\EgresadoRepository;
use App\Core\Escuela\EscuelaRepository;
use App\Core\Estudio\EstudioRepository;
use App\Core\ExperienciaLaboral\ExperienciaLaboralRepository;
use App\Core\Facultad\FacultadRepository;
use App\Core\Idioma\IdiomaRepository;
use App\Core\ModelUtil\ModelUtilRepository;
use App\Core\Programa\ProgramaRepository;
use App\Core\Referencia\ReferenciaRepository;
use App\Core\SemestreAcademico\SemestreAcademicoRepository;
use App\Core\User\UserRepository;
use App\Helper\UtilHelper;
use Illuminate\Http\Request;
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
    protected $repoIdioma;
    protected $repoPrograma;
    protected $repoReferencia;
    protected $repoDetallePrograma;

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
        $this->repoIdioma = new IdiomaRepository();
        $this->repoPrograma = new ProgramaRepository();
        $this->repoReferencia = new ReferenciaRepository();
        $this->repoDetallePrograma = new DetalleProgramaRepository();
    }

    public function datosPersonales()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $egresado_id = Auth::user()->egresado_id;
            $egresado = $this->repoEgresado->find($egresado_id);
            $estados = $this->repoModelUtil->allEstadoCivil();
            return view('system.egresado.curriculum.datos_personales',
                compact('egresado', 'estados'));
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

    public function updateDatosPersonales(Request $request)
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $egresado_id = Auth::user()->egresado_id;
            $data = Input::all();
            $image = $request->file('image');
            $url_imagen = $this->utilHelper->saveImageAtractivo($image);
            $egresado = $this->repoEgresado->updatedEgresado($egresado_id, $data, $url_imagen);
            $user = $this->repoUser->updatedUser(Auth::user()->id, $egresado);
            session()->flash('msg', 'Datos guardados satisfactoriamente');
            return Redirect::back();
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

//    EXPERIENCIA LABORAL ======================================================
    public function listaExperiencia()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $egresado_id = Auth::user()->egresado_id;
            $items = $this->repoExperiencia->allByEgresado($egresado_id);
            return view('system.egresado.curriculum.experiencia.lista',
                compact('items'));
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }

    }

    public function nuevaExperiencia()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $tipoExperiencias = $this->repoModelUtil->allTipoExperiencia();
            return view('system.egresado.curriculum.experiencia.nuevo',
                compact('tipoExperiencias'));
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

    public function createExperiencia()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $data = Input::all();
            $egresado_id = Auth::user()->egresado_id;
            $experiencia = $this->repoExperiencia->createExperiencia($egresado_id, $data);
            session()->flash('msg', 'Datos guardados satisfactoriamente');
            return redirect()->route('experiencia_laboral');
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

//    ESTUDIOS ======================================================
    public function listaEstudio()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $egresado_id = Auth::user()->egresado_id;
            $items = $this->repoEstudio->allByEgresado($egresado_id);
            return view('system.egresado.curriculum.estudios.lista',
                compact('items'));
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

    public function nuevoEstudio()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $nivelEstudio = $this->repoModelUtil->allNivelEstudio();
            return view('system.egresado.curriculum.estudios.nuevo',
                compact('nivelEstudio'));
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

    public function createEstudio()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $data = Input::all();
            $egresado_id = Auth::user()->egresado_id;
            $experiencia = $this->repoEstudio->createEstudio($egresado_id, $data);
            session()->flash('msg', 'Datos guardados satisfactoriamente');
            return redirect()->route('egresado_estudio');
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

//    IDIOMAS ======================================================
    public function listaIdiomas()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $egresado_id = Auth::user()->egresado_id;
            $items = $this->repoIdioma->allByEgresado($egresado_id);
            $nivelCapacidad = $this->repoModelUtil->allNivelCapacidad();
            return view('system.egresado.curriculum.idiomas.lista',
                compact('items', 'nivelCapacidad'));
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

    public function createIdioma()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $data = Input::all();
            $egresado_id = Auth::user()->egresado_id;
            $idioma = $this->repoIdioma->createIdioma($egresado_id, $data);
            session()->flash('msg', 'Datos guardados satisfactoriamente');
            return redirect()->route('egresado_idioma');
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

    public function deleteIdioma($id)
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $idioma = $this->repoIdioma->deleted($id);
            session()->flash('msg', 'Removido satisfactoriamente');
            return redirect()->route('egresado_idioma');
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }


//    PROGRAMAS ======================================================
    public function listaProgramas()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $egresado_id = Auth::user()->egresado_id;
            $programas = $this->repoPrograma->allProgramas();
            $nivelCapacidad = $this->repoModelUtil->allNivelCapacidad();
            $items = $this->repoDetallePrograma->allByEgresado($egresado_id);
            return view('system.egresado.curriculum.programas.lista',
                compact('items', 'nivelCapacidad','programas'));
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

    public function createPrograma()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $data = Input::all();
            $egresado_id = Auth::user()->egresado_id;
            $idioma = $this->repoDetallePrograma->createPrograma($egresado_id, $data);
            session()->flash('msg', 'Datos guardados satisfactoriamente');
            return redirect()->route('egresado_programa');
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

    public function deleteDetallePrograma($id)
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $idioma = $this->repoDetallePrograma->deleted($id);
            session()->flash('msg', 'Removido satisfactoriamente');
            return redirect()->route('egresado_programa');
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

//    REFERENCIAS ======================================================
    public function listaReferencias()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $egresado_id = Auth::user()->egresado_id;
            $items = $this->repoReferencia->allByEgresado($egresado_id);
            $nivelCapacidad = $this->repoModelUtil->allNivelCapacidad();
            return view('system.egresado.curriculum.referencias.lista',
                compact('items', 'nivelCapacidad'));
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

    public function createReferencia()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $data = Input::all();
            $egresado_id = Auth::user()->egresado_id;
            $idioma = $this->repoReferencia->createReferencia($egresado_id, $data);
            session()->flash('msg', 'Datos guardados satisfactoriamente');
            return redirect()->route('egresado_referencia');
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }
    public function editarReferencia($slug, $id)
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $referencia = $this->repoReferencia->find($id);
            return view('system.egresado.curriculum.referencias.editar',
                compact('referencia'));
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
    }

//    curriculu publico ==================================================

    public function curiculumPublico()
    {
        if (Auth::user()->tipo_usuario_id == config('global.user_egresado')) {
            $egresado_id = Auth::user()->egresado_id;
            $egresado = $this->repoEgresado->find($egresado_id);
            $idiomas = $this->repoIdioma->allByEgresado($egresado_id);
            $estudios = $this->repoEstudio->allByEgresado($egresado_id);
            return view('system.egresado.curriculum.curriculum_publico',
                compact('egresado','idiomas','estudios'));
        } else {
            session()->flash('alert', 'No tiene los permisos suficientes para realizar esta acción');
            return redirect()->route('app_inicio');
        }
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
