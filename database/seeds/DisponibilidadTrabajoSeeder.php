<?php

use Illuminate\Database\Seeder;

class DisponibilidadTrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('disponibilidad_trabajo')->insert([
            'nombre' => 'Tiempo Parcial',
            'is_active' => true,
        ]);
        \DB::table('disponibilidad_trabajo')->insert([
            'nombre' => 'Tiempo Completo',
            'is_active' => true,
        ]);

    }
}
