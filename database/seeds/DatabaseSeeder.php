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
        $this->call('EstadoCivilSeeder');
        $this->call('FacultadSeeder');
        $this->call('EscuelaSeeder');
        $this->call('SemestreAcademicoSeeder');
        $this->call('UserTableSeeder');

        Model::reguard();
    }
}
