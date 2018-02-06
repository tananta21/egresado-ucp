<?php

namespace App\Http\Controllers;

use App\Core\Egresado\EgresadoRepository;
use App\Core\Escuela\EscuelaRepository;
use App\Core\Facultad\FacultadRepository;
use App\Core\SemestreAcademico\SemestreAcademicoRepository;
use App\Core\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EgresadoController extends Controller
{
    protected $repoUser;
    protected $repoEgresado;
    protected $repoFacultad;
    protected $repoEscuela;
    protected $repoSemestre;

    public function __construct()
    {
        $this->repoUser = new UserRepository();
        $this->repoEgresado = new EgresadoRepository();
        $this->repoFacultad = new FacultadRepository();
        $this->repoEscuela = new EscuelaRepository();
        $this->repoSemestre = new SemestreAcademicoRepository();
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
