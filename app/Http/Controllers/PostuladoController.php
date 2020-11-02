<?php


namespace App\Http\Controllers;


use App\Perfil;
use App\Vacantes;
use App\Postulado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class PostuladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $perfil = Perfil::all();
        $postulados = Postulado::all();

        return view ('Postulados.index')->with('postulados', $postulados)
                                        ->with('perfil', $perfil);
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

        $data = $request->validate([
            'user_id' => 'required',
            'vacante_id' => 'required'
        ]);

        DB::table('postulados')->insert([
            'user_id' => $data['user_id'],
            'vacante_id' => $data['vacante_id']
        ]);

        return redirect()->action('InicioController@index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Postulado  $postulado
     * @return \Illuminate\Http\Response
     */
    public function show(Postulado $postulado)
    {
        //
        $postulaciones = Postulado::where('user_id', Auth::user()->id)->paginate(10);
        return view('Postulados.show', compact('postulaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postulado  $postulado
     * @return \Illuminate\Http\Response
     */
    public function edit(Postulado $postulado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postulado  $postulado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postulado $postulado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postulado  $postulado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postulado $postulado)
    {
        //
    }
}
