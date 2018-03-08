<?php

use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('programas')->insert([
            'nombre' => 'Microsoft Word',
        ]);
        \DB::table('programas')->insert([
            'nombre' => 'Microsoft Excel',
        ]);
        \DB::table('programas')->insert([
            'nombre' => 'Autocad',
        ]);
        \DB::table('programas')->insert([
            'nombre' => 'Corel Draw',
        ]);

    }
}
