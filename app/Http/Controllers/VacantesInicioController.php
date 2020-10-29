<?php

namespace App\Http\Controllers;

use App\Vacantes;
use App\VacantesInicio;
use Illuminate\Http\Request;

class VacantesInicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vacantes = Vacantes::all();
        return view('vacantes.index')->with('vacantes', $vacantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VacantesInicio  $vacantesInicio
     * @return \Illuminate\Http\Response
     */
    public function show(VacantesInicio $vacantesInicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VacantesInicio  $vacantesInicio
     * @return \Illuminate\Http\Response
     */
    public function edit(VacantesInicio $vacantesInicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VacantesInicio  $vacantesInicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VacantesInicio $vacantesInicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VacantesInicio  $vacantesInicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(VacantesInicio $vacantesInicio)
    {
        //
    }
}
