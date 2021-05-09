<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    public function agregarEvaluacion(Request $request){

        $evaluacion = new Evaluacion;
        $evaluacion->nombre = $request->input('nombreUsuario');
        $evaluacion->titulo = $request->input('tituloEvaluacion');
        $evaluacion->texto_parcial = $request->input('textoParcial');
        $evaluacion->rating = $request->input('rating');
        $evaluacion->save();
        return redirect()->route('welcome');
    }
}
