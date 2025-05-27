<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Restaurante extends Authenticatable
{
    use HasFactory;

    // Especificamos que este modelo se conecta a MongoDB
    protected $connection = 'mongodb';

    // Definimos la colección en la base de datos
    protected $collection = 'restaurantes';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array<string>
     */
    protected $fillable = [
        'nombre',
        'rating',
        'precio',
        'tipo_comida',
        'direccion',
        'estado_apertura',
        'horarios',
        'telefono',
        'sitio_web',
        'accesibilidad',
        'que_ofrecen',
        'popular_por',
        'parking',
        'amenidades',
        'zona',
        'ciudad/pedania',
        'region',
        'clicks',
    ];

    /**
     * Los atributos que deberían estar ocultos para la serialización.
     *
     * @var array<string>
     */
    protected $hidden = [
      
    ];

    /**
     * Los atributos que deberían ser convertidos a tipos específicos.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'horarios' => 'array',  // Convertimos 'horarios' en un array
            'accesibilidad' => 'array',  // Convertimos 'accesibilidad' en un array
            'que_ofrecen' => 'array',  // Convertimos 'que_ofrecen' en un array
            'popular_por' => 'array',  // Convertimos 'popular_por' en un array
            'amenidades' => 'array',  // Convertimos 'amenidades' en un array
            'clicks' => 'integer',  // Aseguramos que 'clicks' sea un entero
        ];
    }
}
