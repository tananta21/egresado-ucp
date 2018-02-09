<?php

use Illuminate\Database\Seeder;

class NivelEstudio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('nivel_estudio')->insert([
            'nombre' => 'Maestría',
            'is_active' => true,
        ]);

        \DB::table('nivel_estudio')->insert([
            'nombre' => 'Doctorado',
            'is_active' => true,
        ]);

    }
}
