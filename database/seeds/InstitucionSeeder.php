<?php

use Illuminate\Database\Seeder;

class InstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('instituciones')->insert([
            'nombre' => 'Universidad Científica del Perú',
            'is_active' => true,
        ]);
        \DB::table('instituciones')->insert([
            'nombre' => 'Universidad Nacional de San Martín',
            'is_active' => true,
        ]);
        \DB::table('instituciones')->insert([
            'nombre' => 'Universidad Peruana Union',
            'is_active' => true,
        ]);
        \DB::table('instituciones')->insert([
            'nombre' => 'Universidad César Vallejo',
            'is_active' => true,
        ]);
        \DB::table('instituciones')->insert([
            'nombre' => 'Universidad César Alas Peruanas',
            'is_active' => true,
        ]);




    }
}
