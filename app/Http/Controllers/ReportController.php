<?php

namespace App\Http\Controllers;

use App\Core\Escuela\EscuelaRepository;
use App\Core\SeguimientoEgresado\SeguimientoEgresadoRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ReportController extends Controller
{
    protected $repoEscuela;
    protected $repoSeguimiento;

    public function __construct()
    {
        $this->repoEscuela = new EscuelaRepository();
        $this->repoSeguimiento = new SeguimientoEgresadoRepository();
    }

    public function index()
    {
        return view('system.admin.report.inicio_report');
    }

    public function situacionLaboral()
    {
        $escuelas = $this->repoEscuela->all();
        return view('system.admin.report.indice_laboral.situacion_laboral',
            compact('escuelas'));
    }
    public function sectorTrabajo()
    {
        $escuelas = $this->repoEscuela->all();
        return view('system.admin.report.indice_laboral.sector_trabajo',
            compact('escuelas'));
    }

    public function gradoSatisfaccion()
    {
        $escuelas = $this->repoEscuela->all();
        return view('system.admin.report.indice_laboral.grado_satisfaccion',
            compact('escuelas'));
    }


//    METODOS DE APIS PARA GENERAR LOS GRAFICOS ===============================================
    public function apiSituacionLaboral()
    {
        $escuela_id = Input::get('escuela_id');
        $query = $this->repoSeguimiento->apiSituacionLaboral($escuela_id);
        $datos = array($query);
        if (empty($datos)) {
            return 0;
        } else {
            return response()->json($datos);
        }

    }

    public function apiSectorTrabajo()
    {
        $escuela_id = Input::get('escuela_id');
        $query = $this->repoSeguimiento->apiSectorTrabajo($escuela_id);
        $datos = array($query);
        if (empty($datos)) {
            return 0;
        } else {
            return response()->json($datos);
        }

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
