<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VacanteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('vacantes')->insert([
            'titulo' => 'Lorem Ipsum1',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'caracter' => 'titular',
            'direccion' => 'lorem Ipsum 123',
            'colegio' => 'Colegio Name',
            'horario' => 'Lunes a Viernes 10-12',
            'requisitos' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita fuga earum.',
            'materia_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('vacantes')->insert([
            'titulo' => 'Lorem Ipsum2',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'caracter' => 'suplente',
            'direccion' => 'lorem Ipsum 123',
            'colegio' => 'Colegio Name',
            'horario' => 'miercoles a Viernes 10-12',
            'requisitos' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita fuga earum.',
            'materia_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('vacantes')->insert([
            'titulo' => 'Lorem Ipsum3',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'caracter' => 'suplente',
            'direccion' => 'lorem Ipsum 123',
            'colegio' => 'Colegio Name',
            'horario' => 'Lunes a Viernes 10-12',
            'requisitos' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita fuga earum.',
            'materia_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('vacantes')->insert([
            'titulo' => 'Lorem Ipsum4',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'caracter' => 'titular',
            'direccion' => 'lorem Ipsum 123',
            'colegio' => 'Colegio Name',
            'horario' => 'Lunes a Viernes 10-12',
            'requisitos' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita fuga earum.',
            'materia_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('vacantes')->insert([
            'titulo' => 'Lorem Ipsum5',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'caracter' => 'titular',
            'direccion' => 'lorem Ipsum 123',
            'colegio' => 'Colegio Name',
            'horario' => 'Viernes 10-11:30',
            'requisitos' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita fuga earum.',
            'materia_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('vacantes')->insert([
            'titulo' => 'Lorem Ipsum6',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'caracter' => 'suplente',
            'direccion' => 'lorem Ipsum 123',
            'colegio' => 'Colegio Name',
            'horario' => 'sabados 10-12',
            'requisitos' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita fuga earum.',
            'materia_id' => 7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('vacantes')->insert([
            'titulo' => 'Lorem Ipsum7',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'caracter' => 'titular',
            'direccion' => 'lorem Ipsum 123',
            'colegio' => 'Colegio Name',
            'horario' => 'martes 18:30-20:00',
            'requisitos' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita fuga earum.',
            'materia_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('vacantes')->insert([
            'titulo' => 'Lorem Ipsum8',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'caracter' => 'titular',
            'direccion' => 'lorem Ipsum 123',
            'colegio' => 'Colegio Name',
            'horario' => 'Sabado recreativo',
            'requisitos' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita fuga earum.',
            'materia_id' => 9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('vacantes')->insert([
            'titulo' => 'Lorem Ipsum9',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'caracter' => 'titular',
            'direccion' => 'lorem Ipsum 123',
            'colegio' => 'Colegio Name',
            'horario' => 'miercoles 15-17',
            'requisitos' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita fuga earum.',
            'materia_id' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
