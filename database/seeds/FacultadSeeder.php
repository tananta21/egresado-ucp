<?php

use Illuminate\Database\Seeder;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('facultad')->insert([
            'nombre' => 'Facultad de Ciencias e Ingeniería',
            'abreviatura' => 'FCI',
            'is_active' => true
        ]);

        \DB::table('facultad')->insert([
            'nombre' => 'Facultad de Arquitectura y Urbanismo',
            'abreviatura' => 'FDCP',
            'is_active' => true
        ]);

        \DB::table('facultad')->insert([
            'nombre' => 'Facultad de Educación y Humanidades',
            'abreviatura' => 'FEH',
            'is_active' => true
        ]);
        \DB::table('facultad')->insert([
            'nombre' => 'Facultad de Negocios',
            'abreviatura' => 'FN',
            'is_active' => true
        ]);
        \DB::table('facultad')->insert([
            'nombre' => 'Facultad de Derecho y Ciencias Políticas',
            'abreviatura' => 'FDCP',
            'is_active' => true
        ]);




    }
}
