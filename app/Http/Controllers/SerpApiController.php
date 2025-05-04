<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SerpApiController extends Controller
{
    public function index()
    {
        // Parámetros de la consulta
        $query = [
            'engine' => 'google_maps',
            'q' => 'Coffee',
            'll' => '@40.7455096,-74.0083012,14z',
            'api_key' => '7c846028bf251019d896fa58d69307ef055bc6e2ca91f45bbee7fff4364e80b5'
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
