<?php

namespace App\Http\Controllers;

use App\Core\Egresado\EgresadoRepository;
use App\Core\Escuela\EscuelaRepository;
use App\Core\Facultad\FacultadRepository;
use App\Core\SemestreAcademico\SemestreAcademicoRepository;
use App\Core\User\UserRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CurriculumController extends Controller
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

    public function datosPersonales()
    {
        return view('system.egresado.curriculum.datos_personales');
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
