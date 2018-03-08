<?php

use Illuminate\Database\Seeder;

class NivelCapacidad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('nivel_capacidad')->insert([
            'nombre' => 'Básico',
            'is_active' => true,
        ]);
        \DB::table('nivel_capacidad')->insert([
            'nombre' => 'Intermedio',
            'is_active' => true,
        ]);
        \DB::table('nivel_capacidad')->insert([
            'nombre' => 'Avanzado',
            'is_active' => true,
        ]);


    }
}
