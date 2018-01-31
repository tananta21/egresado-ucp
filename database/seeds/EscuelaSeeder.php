<?php

use Illuminate\Database\Seeder;

class EscuelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('escuela')->insert([
            'facultad_id' => 1,
            'nombre' => 'Programa Académico de Ingeniería Civil',
            'abreviatura' => 'PAIC',
            'is_active' => true
        ]);
        \DB::table('escuela')->insert([
            'facultad_id' => 1,
            'nombre' => 'Programa Académico de Ingeniería Informática y de Sistemas',
            'abreviatura' => 'PAIIS',
            'is_active' => true
        ]);

        \DB::table('escuela')->insert([
            'facultad_id' => 2,
            'nombre' => 'Programa Académico de Arquitectura',
            'abreviatura' => 'PAA',
            'is_active' => true
        ]);
        \DB::table('escuela')->insert([
            'facultad_id' => 3,
            'nombre' => 'Programa Académico de Ciencias de la Comunicación',
            'abreviatura' => 'PACC',
            'is_active' => true
        ]);

        \DB::table('escuela')->insert([
            'facultad_id' => 4,
            'nombre' => 'Programa Académico de Administración de Empresas',
            'abreviatura' => 'PAAE',
            'is_active' => true
        ]);
        \DB::table('escuela')->insert([
            'facultad_id' => 4,
            'nombre' => 'Programa Académico de Contabilidad y Finanzas',
            'abreviatura' => 'PACF',
            'is_active' => true
        ]);
        \DB::table('escuela')->insert([
            'facultad_id' => 5,
            'nombre' => 'Programa Académico de Derecho',
            'abreviatura' => 'PAD',
            'is_active' => true
        ]);







    }
}
