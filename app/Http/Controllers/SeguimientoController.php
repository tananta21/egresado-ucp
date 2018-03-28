<?php

namespace App\Http\Controllers;

use App\Core\SeguimientoEgresado\SeguimientoEgresadoRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SeguimientoController extends Controller
{
    protected $repoSeguimiento;

    public function __construct()
    {
        $this->repoSeguimiento = new SeguimientoEgresadoRepository();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function situacionLaboral(){
        $egresado_id = Auth::user()->egresado_id;
        $record = $this->repoSeguimiento->findByEgresado($egresado_id);
        if($record->isEmpty()){
            return view('system.egresado.seguimiento.situacion_laboral.lista');
        }
        else{

        }
    }

    public function updateSituacionLaboral(){
        $data = Input::all();
        $egresado_id = Auth::user()->egresado_id;
        $record = $this->repoSeguimiento->findByEgresado($egresado_id);
        if($record->isEmpty()){
            if(Input::get('is_work') == 1){
                $new = $this->repoSeguimiento->create();
            }
            else if(Input::get('is_work') == 0){

            }
        }
        else{

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
