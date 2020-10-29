<?php

namespace App\Http\Controllers;

use App\Materias;
use App\Vacantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VacantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function seleccion()
    {
        //
        $vacantes = Vacantes::all();
        return view('vacantesAdmin.seleccion')->with('vacantes', $vacantes);
    }



    public function index()
    {
        //
        $vacantes = Vacantes::all();
        return view('vacantesAdmin.index')->with('vacantes', $vacantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $materias = Materias::all();

        return view('vacantesAdmin.create')->with('materias', $materias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'horario' => 'required',
            'requisitos' => 'required',
            'materia' => 'required'
        ]);

        DB::table('vacantes')->insert([
            'titulo' => $data['titulo'],
            'descripcion' => $data['descripcion'],
            'horario' => $data['horario'],
            'requisitos' => $data['requisitos'],
            'materia_id' => $data['materia']
        ]);

        return redirect()->action('VacantesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacantes  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function show(Vacantes $vacantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacantes  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacantes $vacantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacantes  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacantes $vacantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacantes  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacantes $vacantes)
    {
        //
    }
}
