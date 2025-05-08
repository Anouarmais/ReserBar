<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Like extends Model
{
    //

    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'likes';


    protected $fillable = [
        'id_restaurant',
        'id_user',
    ];
}
