<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;

class RestauranteController extends Controller
{
    public function form()
    {
        return view('buscar');
    }

    public function buscar(Request $request)
    {

    $rawInput = $request->input('zona');
    $termino = strtolower(trim($rawInput));
    $termino = preg_replace('/\s+/', ' ', $termino); 

    // Búsqueda flexible solo en ciudad y dirección
    $restaurantes = Restaurante::where(function ($query) use ($termino) {
        $query->whereRaw(['ciudad' => ['$regex' => $termino, '$options' => 'i']])
              ->orWhereRaw(['direccion' => ['$regex' => $termino, '$options' => 'i']]);
    })->get();

    return view('resultados', [
        'restaurantes' => $restaurantes,
        'termino' => $rawInput
    ]);

    }
}
