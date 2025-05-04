<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SerpApiController extends Controller
{
    public function index() {

        $query = [
            'engine' => 'google_maps',
            'q' => 'Coffee',
            'll' => '@40.7455096,-74.0083012,14z',
            'api_key' => '562ec3be9eb9bf89c5608bb560351f60ed9fefc83cb6ec41ef985fcfeadc4c2a'

        ];

        // Realizar la solicitud a la API
        $response = Http::get('https://serpapi.com/search.json', $query);

        // Obtener los resultados locales
        $results = $response->json()['local_results'] ?? [];

        // Extraer solo los ratings de los resultados
        $ratings = array_map(function($result) {
            return [
                'title' => $result['title'],
                'rating' => $result['rating'] ?? 'No rating available',
            ];
        }, $results);

        // Devolver los ratings en formato JSON
        return response()->json($ratings);

    }
}