<?php

use App\Models\Evaluacion;
use Illuminate\Database\Seeder;

class EvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evaluacion::Create([
            'nombre' => 'Carlos Torrealba',
            'titulo' => 'Expresiones Algebraicas',
            'texto_parcial' => 'Una expresion algebraica es una combinacion de letras y numeros ligadas por los signos de las operaciones',
            'rating' => '5',
        ]);

        Evaluacion::Create([
            'nombre' => 'Luis Rondon',
            'titulo' => 'Dia de las madres',
            'texto_parcial' => 'El primer domingo de mayo se celebra el Dia de la Madre 2021',
            'rating' => '3',
        ]);
    }
}
