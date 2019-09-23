<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemedyManufacturer extends Model
{
    //

    protected $fillable = [
        'name', 
        'address_city', 
        'address_state', 
        'phone', 
        'email', 
        'active'
    ];
}
