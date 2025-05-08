<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Comment extends Model
{
    //  


    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
 
    protected $connection = 'mongodb';
    protected $collection = 'comments';

    protected $fillable = [
        'restaurante_id',
        'usuario_id',
        'texto',
        'fecha_hora'
    ];

}
