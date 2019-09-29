<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'doctor_id', 
        'patient_id', 
        'date', 
        'start', 
        'end', 
        'active'
    ];
}
