<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 28/03/2018
 * Time: 03:14 PM
 */

namespace App\Core\SeguimientoEgresado;


use App\Core\Contracts\BaseRepositoryInterface;

class SeguimientoEgresadoRepository implements BaseRepositoryInterface
{
    protected $seguimiento;

    public function __construct()
    {
        $this->seguimiento = new SeguimientoEgresado();
    }

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function createSeguimientoIsWork($egresado_id, array $attributes)
    {
        $new = $this->seguimiento;
        $new->egresado_id = $egresado_id;
        $new->area_laboral_id = $attributes['area_laboral_id'];
        $new->situacion_laboral_id = $attributes['situacion_laboral_id'];
        $new->disponibilidad_id = $attributes['disponibilidad_id'];
        $new->sector_trabajo_id = $attributes['sector_trabajo_id'];
        $new->satisfaccion_id = $attributes['satisfaccion_id'];
        $new->empresa = $attributes['empresa'];
        $new->rubro = $attributes['rubro'];
        $new->cargo = $attributes['cargo'];
        $new->telefono = $attributes['telefono'];
        $new->pagina_web = $attributes['pagina_web'];
        $new->is_work = $attributes['is_work'];
        $new->save();
        return $new;
    }

    public function createSeguimientoIsNotWork($egresado_id, array $attributes)
    {
        $new = $this->seguimiento;
        $new->egresado_id = $egresado_id;
        $new->area_laboral_id = '';
        $new->situacion_laboral_id = '';
        $new->disponibilidad_id = '';
        $new->sector_trabajo_id = '';
        $new->satisfaccion_id = '';
        $new->empresa = '';
        $new->rubro = '';
        $new->cargo = '';
        $new->telefono = '';
        $new->pagina_web = '';
        $new->is_work = $attributes['is_work'];
        $new->save();
        return $new;
    }

    public function updateSeguimientoIsWork($item, $egresado_id, array $attributes)
    {
        $update = $this->seguimiento->find($item[0]->id);
        $update->egresado_id = $egresado_id;
        $update->area_laboral_id = $attributes['area_laboral_id'];
        $update->situacion_laboral_id = $attributes['situacion_laboral_id'];
        $update->disponibilidad_id = $attributes['disponibilidad_id'];
        $update->sector_trabajo_id = $attributes['sector_trabajo_id'];
        $update->satisfaccion_id = $attributes['satisfaccion_id'];
        $update->empresa = $attributes['empresa'];
        $update->rubro = $attributes['rubro'];
        $update->cargo = $attributes['cargo'];
        $update->telefono = $attributes['telefono'];
        $update->pagina_web = $attributes['pagina_web'];
        $update->is_work = $attributes['is_work'];
        $update->save();
        return $update;
    }

    public function updateSeguimientoIsNotWork($item, $egresado_id, array $attributes)
    {
        $update = $this->seguimiento->find($item[0]->id);
        $update->egresado_id = $egresado_id;
        $update->area_laboral_id = '';
        $update->situacion_laboral_id = '';
        $update->disponibilidad_id = '';
        $update->sector_trabajo_id = '';
        $update->satisfaccion_id = '';
        $update->empresa = '';
        $update->rubro = '';
        $update->cargo = '';
        $update->telefono = '';
        $update->pagina_web = '';
        $update->is_work = $attributes['is_work'];
        $update->save();
        return $update;
    }


    public function apiSituacionLaboral($escuela_id)
    {
        $query = \DB::select('
                        SELECT
                            seguimiento_egresado.is_work,
                            COUNT(*) AS cantidad
                        FROM
                            seguimiento_egresado
                        INNER JOIN egresados ON seguimiento_egresado.egresado_id = egresados.id
                        WHERE
                            egresados.escuela_id = '.$escuela_id.'
                        GROUP BY
                            seguimiento_egresado.is_work
                        ORDER BY seguimiento_egresado.is_work asc        
                                ');
        return $query;
    }

    public function apiSectorTrabajo($escuela_id)
    {
        $is_work_true = config('global.is_work_true');
        $query = \DB::select('
                       SELECT
                            seguimiento_egresado.sector_trabajo_id,
                            COUNT(*) AS cantidad
                        FROM
                            seguimiento_egresado
                        INNER JOIN egresados ON seguimiento_egresado.egresado_id = egresados.id
                        WHERE
                            egresados.escuela_id = '.$escuela_id.' 
                            and seguimiento_egresado.is_work = '.$is_work_true.'
                        GROUP BY
                            seguimiento_egresado.sector_trabajo_id      
                                ');
        return $query;
    }


    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    public function updated($id, array $attributes)
    {
        // TODO: Implement updated() method.
    }

    public function findByEgresado($egresado_id)
    {
        return $this->seguimiento->where('egresado_id', $egresado_id)->get();
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function deleted($id)
    {
        // TODO: Implement deleted() method.
    }
}