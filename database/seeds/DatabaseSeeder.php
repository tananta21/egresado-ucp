<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

//         $this->call('UserTableSeeder');
        $this->call('TipoUsuarioSeeder');
        $this->call('DisponibilidadTrabajoSeeder');
        $this->call('TipoCapacitacionSeeder');
        $this->call('InstitucionSeeder');
        $this->call('ProgramasSeeder');
        $this->call('EstadoCivilSeeder');
        $this->call('TipoExperienciaSeeder');
        $this->call('NivelEstudio');
        $this->call('NivelCapacidad');
        $this->call('FacultadSeeder');
        $this->call('EscuelaSeeder');
        $this->call('SemestreAcademicoSeeder');
        $this->call('UserTableSeeder');
        $this->call('AreasLaborales');
        $this->call('Satisfaccion');
        $this->call('SectorTrabajo');
        $this->call('SituacionLaboral');

        Model::reguard();
    }
}
