<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name', 
        'email', 
        'document_number', 
        'birth_date', 
        'street', 
        'number',
        'neighborhood',
        'city',
        'state',
        'postal_code',
        'phone',
        'mobile',
        'active'
    ];
}
