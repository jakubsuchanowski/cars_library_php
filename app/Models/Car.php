<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',
        'model',
        'production_year',
        'power_hp',
        'engine_capacity',
        'fuel_type',
        'drive',
        'transmission',
        'type',
        'doors_number'
    ];
    public $timestamps=false;
}
