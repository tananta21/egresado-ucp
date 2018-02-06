<?php

use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estado_civil')->insert([
            'nombre' => 'Soltero',
            'is_active' => true,
        ]);
        \DB::table('estado_civil')->insert([
            'nombre' => 'Casado',
            'is_active' => true,
        ]);
        \DB::table('estado_civil')->insert([
            'nombre' => 'Divorciado',
            'is_active' => true,
        ]);
        \DB::table('estado_civil')->insert([
            'nombre' => 'Viudo',
            'is_active' => true,
        ]);

    }
}
