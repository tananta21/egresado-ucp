<?php

use Illuminate\Database\Seeder;

class TipoExperienciaSeeder extends Seeder
{

    public function run()
    {
        \DB::table('tipo_experiencia')->insert([
            'nombre' => 'Laboral',
            'is_active' => true,
        ]);
        \DB::table('tipo_experiencia')->insert([
            'nombre' => 'Prácticas Pre-profesionales',
            'is_active' => true,
        ]);


    }
}
