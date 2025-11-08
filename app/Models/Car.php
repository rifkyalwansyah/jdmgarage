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
        'year',
        'price',
        'color',
        'mileage',
        'description',
        'image',
        'status',
        'engine',
        'transmission'
    ];

    // Optional: Casting untuk tipe data
    protected $casts = [
        'price' => 'decimal:2',
        'mileage' => 'integer',
    ];
}