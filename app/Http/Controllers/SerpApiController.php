<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Restaurante;
class SerpApiController extends Controller
{
    public function index()
    {
   
        $query = [
            'engine' => 'google_maps',
            'q' => 'restaurants',
            'll' => '@37.983311,-1.128172,14z',
            'api_key' => '7c846028bf251019d896fa58d69307ef055bc6e2ca91f45bbee7fff4364e80b5'
        ];

        $response = Http::get('https://serpapi.com/search.json', $query);


        $results = $response->json()['local_results'] ?? [];

   
        $DatosResturant = array_map(function($result) {
            $extensions = collect($result['extensions'] ?? []);
            return [
                'name' => $result['title'] ?? null,
                'rating' => $result['rating'] ?? null,
                'precio' => $result['price'] ?? null,
                'tipo_comida' => $result['type'] ?? null,
                'direccion' => $result['address'] ?? null,
                'estado_apertura' => $result['open_state'] ?? null,
                'horarios' => $result['operating_hours'] ?? null,
                'telefono' => $result['phone'] ?? null,
                'sitio_web' => $result['website'] ?? null,
                'accesibilidad' => $extensions->firstWhere('accessibility')["accessibility"] ?? null,
                'que_ofrecen' => $extensions->firstWhere('offerings')["offerings"] ?? null,
                'popular_por' => $extensions->firstWhere('popular_for')["popular_for"] ?? null,
                'parking' => $extensions->firstWhere('parking')["parking"] ?? null,
                'amenidades' => $extensions->firstWhere('amenities')["amenities"] ?? null,
                'clicks' => null 
            ];
        }, $results);

        foreach ($DatosResturant as $data) {
          
        
       
                Restaurante::create($data);
          
        }
        


        return response()->json($DatosResturant);
    }
}
