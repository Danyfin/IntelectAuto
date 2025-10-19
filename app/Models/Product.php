<?php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'article', 'name', 'brend', 'catigories', 'photo1', 'photo2', 'photo3',
        'video1', 'video2', 'video3', 'description', 'price_rrc', 'packaging', 'weight',
        'length', 'width', 'height', 'expiration_date', 'storage_conditions', 'barcode', 'hs_code'
    ];

    protected $casts = [
        'date' => 'date',
        'price_rrc' => 'decimal:2',
        'weight' => 'decimal:2',
        'length' => 'decimal:2',
        'width' => 'decimal:2',
        'height' => 'decimal:2',
        'barcode' => 'string',
        'hs_code' => 'string'
    ];
}
