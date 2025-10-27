<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        'brend',
        'catigories',
        'photol',
        'photo2', 
        'photo3',
        'videol',
        'video2',
        'video3',
        'description',
        'price',
        'RRC',
        'packaging',
        'weight',
        'length',
        'width',
        'height',
        'expiration',
        'storage',
        'conbarcode',
        'CNOFEA'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'date',
        'price' => 'decimal:2',
        'RRC' => 'decimal:2',
        'weight' => 'decimal:2',
        'length' => 'decimal:2',
        'width' => 'decimal:2',
        'height' => 'decimal:2',
        'expiration' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Accessors & Mutators
     */
    
}