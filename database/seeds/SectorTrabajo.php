<?php

use Illuminate\Database\Seeder;

class SectorTrabajo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sector_trabajo')->insert([
            'nombre' => 'Público',
        ]);
        \DB::table('sector_trabajo')->insert([
            'nombre' => 'Privado',
        ]);

    }
}
