<?php

use Illuminate\Database\Seeder;

class TipoCapacitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipo_capacitacion')->insert([
            'nombre' => 'Curso',
            'is_active' => true,
        ]);
        \DB::table('tipo_capacitacion')->insert([
            'nombre' => 'Taller',
            'is_active' => true,
        ]);

    }
}
