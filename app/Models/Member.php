<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Member extends Model
{
    //

    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $connection = 'mongodb';

    protected $collection = 'members';


    protected $fillable = [
        'name',
        'restaurant_name',
        'type_Subscription',
        'phone',
        'pay_date',
    ];
    
}
