<?php

use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipo_usuarios')->insert([
            'nombre' => 'admin',
            'is_active' => true,
        ]);
        \DB::table('tipo_usuarios')->insert([
            'nombre' => 'alumno',
            'is_active' => true,
        ]);


    }
}
