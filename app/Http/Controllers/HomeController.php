<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $evaluaciones = Evaluacion::where('status', '=', 'A')->get();
        return view('home', compact('evaluaciones'));

    }

    public function abrirModal($id){
        $evaluaciones2 = Evaluacion::where('id', '=', $id)->get();
    }

    public function eliminar(Request $request, Evaluacion $evaluaciones){
        $evaluaciones->status = 'E';
        $evaluaciones->save();
        return redirect()->route('home');
    }
}
