<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'rooms',
        'bedrooms',
        'bathrooms',
        'garages',
        'area',
        'price',
        'image',
        'status'
    ];
}
