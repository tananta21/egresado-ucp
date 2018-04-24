<?php

namespace App\Http\Controllers;

use App\Core\AreaLaboral\AreaLaboralRepository;
use App\Core\Egresado\EgresadoRepository;
use App\Core\ModelUtil\ModelUtilRepository;
use App\Core\SeguimientoEgresado\SeguimientoEgresadoRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SeguimientoController extends Controller
{
    protected $repoSeguimiento;
    protected $repoArealaboral;
    protected $repoEgresado;
    protected $repoModelUtil;

    public function __construct()
    {
        $this->repoSeguimiento = new SeguimientoEgresadoRepository();
        $this->repoArealaboral = new AreaLaboralRepository();
        $this->repoEgresado = new EgresadoRepository();
        $this->repoModelUtil = new ModelUtilRepository();
    }


    public function situacionLaboral(){
        $egresado_id = Auth::user()->egresado_id;
        $egresado = $this->repoEgresado->find($egresado_id);
        $seguimiento = $this->repoSeguimiento->findByEgresado($egresado_id);
        $area_laboral = $this->repoArealaboral->allByEscuela($egresado->escuela_id);
        $disponibilidad = $this->repoModelUtil->allDisponibilidad();
        $sector_trabajo = $this->repoModelUtil->allSectorTrabajo();
        $situacion_laboral = $this->repoModelUtil->allSituacionLaboral();
        $satisfaccion = $this->repoModelUtil->allSatisfaccion();
        if($seguimiento->isEmpty()){
            return view('system.egresado.seguimiento.situacion_laboral.lista',
                compact('area_laboral','disponibilidad','sector_trabajo','situacion_laboral','satisfaccion'));
        }
        else{
            return view('system.egresado.seguimiento.situacion_laboral.update',
                compact('seguimiento','area_laboral','disponibilidad','sector_trabajo','situacion_laboral','satisfaccion'));

        }
    }

    public function updateSituacionLaboral(){
        $data = Input::all();
        $egresado_id = Auth::user()->egresado_id;
        $record = $this->repoSeguimiento->findByEgresado($egresado_id);
        if($record->isEmpty()){
            if(Input::get('is_work') == 1){
                $new = $this->repoSeguimiento->createSeguimientoIsWork($egresado_id,$data);
                $seguimiento = $this->repoSeguimiento->findByEgresado($new->egresado_id);
                session()->flash('msg', 'Se actualizaron tus datos satisfactoriamente');
                return redirect()->action('SeguimientoController@situacionLaboral');
            }
            else if(Input::get('is_work') == 0){
                $new = $this->repoSeguimiento->createSeguimientoIsNotWork($egresado_id,$data);
                $seguimiento = $this->repoSeguimiento->findByEgresado($new->egresado_id);
                session()->flash('msg', 'Se actualizaron tus datos satisfactoriamente');
                return redirect()->action('SeguimientoController@situacionLaboral');
            }
        }
        else{
            if(Input::get('is_work') == 1) {
                $this->repoSeguimiento->updateSeguimientoIsWork($record, $egresado_id, $data);
                session()->flash('msg', 'Se actualizaron tus datos satisfactoriamente');
                return redirect()->action('SeguimientoController@situacionLaboral');
            }
            else if(Input::get('is_work') == 0){
                $this->repoSeguimiento->updateSeguimientoIsNotWork($record, $egresado_id, $data);
                session()->flash('msg', 'Se actualizaron tus datos satisfactoriamente');
                return redirect()->action('SeguimientoController@situacionLaboral');

            }


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
