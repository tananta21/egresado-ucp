<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'tipo_usuario_id' => 1,
            'codigo' => 2101,
            'slug' => str_slug(substr("kevin anthony",0, 20).'-'.time()),
            'nombre' => 'kevin anthony',
            'apellido' => 'tananta del aguila',
            'email' => 'kevintananta96@gmail.com',
            'password' =>  Hash::make('2101'),
            'is_active' => true,
        ]);

    }
}
