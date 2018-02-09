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
            'nombre' => 'Administrador',
            'is_active' => true,
        ]);
        \DB::table('tipo_usuarios')->insert([
            'nombre' => 'Egresado',
            'is_active' => true,
        ]);


    }
}
