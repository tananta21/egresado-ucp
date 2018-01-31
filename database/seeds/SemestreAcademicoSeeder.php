<?php

use Illuminate\Database\Seeder;

class SemestreAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('semestre_academico')->insert([
            'semestre' => '2015-I',
            'year' => '2015',
            'is_active' => true,
        ]);
        \DB::table('semestre_academico')->insert([
            'semestre' => '2015-II',
            'year' => '2015',
            'is_active' => true,
        ]);
        \DB::table('semestre_academico')->insert([
            'semestre' => '2016-I',
            'year' => '2016',
            'is_active' => true,
        ]);
        \DB::table('semestre_academico')->insert([
            'semestre' => '2016-II',
            'year' => '2016',
            'is_active' => true,
        ]);
        \DB::table('semestre_academico')->insert([
            'semestre' => '2017-I',
            'year' => '2017',
            'is_active' => true,
        ]);

        \DB::table('semestre_academico')->insert([
            'semestre' => '2017-II',
            'year' => '2017',
            'is_active' => true,
        ]);
        \DB::table('semestre_academico')->insert([
            'semestre' => '2018-I',
            'year' => '2018',
            'is_active' => true,
        ]);






    }
}
