<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    //

    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'mongodb';
    protected $collection = 'reservations';

    protected $fillable = [
        'id_restaurant',
        'number_people',
        'name',
        'last_name',
        'phone',
        'date',
        'time',
    ];
}
