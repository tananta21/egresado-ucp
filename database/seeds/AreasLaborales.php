<?php

use Illuminate\Database\Seeder;

class AreasLaborales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //AREAS LABORALES PARA INGENIERIA CIVIL

        \DB::table('areas_laborales')->insert([
            'escuela_id' => 1,
            'nombre' => 'Obras de regulación, captación, abastecimiento y tratamiento de aguas',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 1,
            'nombre' => 'Obras de riego y sus correspondientes obras de desagüe y drenaje',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 1,
            'nombre' => 'Instalaciones hidromecánicas',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 1,
            'nombre' => 'Obras de corrección y regulación fluvial',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 1,
            'nombre' => 'Trabajos topográficos y geodésicos',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 1,
            'nombre' => 'Lotificaciones urbanas y subdivisiones por el régimen de propiedad horizontal',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 1,
            'nombre' => 'Otros',
        ]);



        //AREAS LABORALES PARA INGENIERIA DE SISTEMAS DE INFORMACION

        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Director de inteligencia de negocios',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Director de arquitectura empresarial y gestión de procesos',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Experto en comercio electrónico y soluciones de e-business',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Consultor de tecnologías de la información y la comunicación (TIC)',
        ]);

        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Social media manager',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Consultor independiente en seguridad, calidad y auditoría de sistemas',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Consultor en gestión de redes y TIC',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Emprendedor digital',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Análisis y diseño de sistemas informáticos',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Dirección de desarrollo de software',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Mantenimiento de infraestructuras',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Administración de bases de datos',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Consultoría técnica',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Auditoría informática',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Diseño, selección y evaluación de infraestructuras tecnológicas',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Diseño, evaluación y control de proyectos informáticos',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Gerente de Informática',
        ]);
        \DB::table('areas_laborales')->insert([
            'escuela_id' => 2,
            'nombre' => 'Otros',
        ]);














    }
}
