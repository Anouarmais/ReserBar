<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Models\Restaurante;
=======
use App\Models\Restaurante;

>>>>>>> main
class SerpApiController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
   
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
=======

        $zonas = [
        //    'norte'  => '@38.031059,-1.130090,14z',
        //    'centro' => '@37.986059,-1.130090,14z',
        //    'sur'    => '@37.950059, -1.130090,14z',
        //    'este'   => '@37.986059,-1.100090,14z',
        //    'oeste'  => '@37.986059,-1.160090,14z',

         

        ];

        $resultadosTotales = [];
        foreach ($zonas as $zona => $coordenadas) {
            $query = [
                'engine' => 'google_maps',
                'q' => 'restaurants',
                'll' => $coordenadas,
                'radius' => '5000',
                'type' => 'search',
                'api_key' => '7c846028bf251019d896fa58d69307ef055bc6e2ca91f45bbee7fff4364e80b5'
>>>>>>> main
            ];

<<<<<<< HEAD
        foreach ($DatosResturant as $data) {
          
        
       
                Restaurante::create($data);
          
        }
        


        return response()->json($DatosResturant);
=======
            $response = Http::get('https://serpapi.com/search.json', $query);


            $results = $response->json()['local_results'] ?? [];


            $DatosResturant = array_map(function ($result) use ($zona) {
                $extensions = collect($result['extensions'] ?? []);
                return [
                    'nombre' => $result['title'] ?? null,
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
                    'zona' => $zona,
                    'clicks' => null
                ];
            }, $results);

            foreach ($DatosResturant as $data) {
                if (!Restaurante::where('nombre', $data['nombre'])->where('direccion', $data['direccion'])->where('telefono', $data['telefono'])->exists()) {
                    Restaurante::create($data);
                }
            }
            $resultadosTotales = array_merge($resultadosTotales, $DatosResturant);
        }

        return response()->json($resultadosTotales);
>>>>>>> main
    }
}
