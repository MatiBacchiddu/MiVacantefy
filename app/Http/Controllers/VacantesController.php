<?php

namespace App\Http\Controllers;

use App\Materias;
use App\Vacantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class VacantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth'); // proteger autenticacion
    }


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
            'caracter' => 'required',
            'direccion' => 'required',
            'colegio' => 'required',
            'descripcion' => 'required',
            'horario' => 'required',
            'requisitos' => 'required',
            'materia' => 'required'
        ]);

        DB::table('vacantes')->insert([
            'titulo' => $data['titulo'],
            'caracter' => $data['caracter'],
            'direccion' => $data['direccion'],
            'colegio' => $data['colegio'],
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
        $usuario = User::all();
        return view('vacantes.show')->with('vacantes', $vacantes)->with('usuario', $usuario);
    }

    public function materia(Vacantes $vacantes)
    {
        return view('materias.show');
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
