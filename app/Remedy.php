<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remedy extends Model
{
    protected $fillable = [
        'generic_name', 
        'factory_name', 
        'manufacturer_id', 
        'active'
    ];
}
