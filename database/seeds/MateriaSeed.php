<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('materias')->insert([
            'nombre' => 'Matematicas'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Historia'
        ]);


        DB::table('materias')->insert([
            'nombre' => 'Sociales'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Naturales'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Arte'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Programación'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Gimnasia'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Teatro'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Literatura'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Economia'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Algebra'
        ]);
    }
}
