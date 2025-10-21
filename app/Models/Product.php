<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date',
        'article',
        'name', 
        'brand',
        'category',
        'photo1',
        'photo2', 
        'photo3',
        'video1',
        'video2',
        'video3',
        'description',
        'our_price',
        'packaging',
        'weight',
        'length',
        'width',
        'height',
        'expiration_date',
        'storage_conditions',
        'barcode',
        'hs_code',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
   
}