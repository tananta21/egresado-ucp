<?php

use Illuminate\Database\Seeder;

class Satisfaccion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('satisfaccion')->insert([
            'nombre' => 'Muy malo',
        ]);
        \DB::table('satisfaccion')->insert([
            'nombre' => 'Malo',
        ]);
        \DB::table('satisfaccion')->insert([
            'nombre' => 'Regular',
        ]);
        \DB::table('satisfaccion')->insert([
            'nombre' => 'Bueno',
        ]);
        \DB::table('satisfaccion')->insert([
            'nombre' => 'Muy bueno',
        ]);

    }
}
