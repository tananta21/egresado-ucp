<?php

use Illuminate\Database\Seeder;

class SituacionLaboral extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('situacion_laboral')->insert([
            'nombre' => 'Con trabajo temporal',
        ]);
        \DB::table('situacion_laboral')->insert([
            'nombre' => 'Con trabajo a nombramiento',
        ]);

    }
}
