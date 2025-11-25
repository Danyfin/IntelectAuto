<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;

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
     * Searchable configuration
     */
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'article' => $this->article,
            'brend' => $this->brend,
            'catigories' => $this->catigories,
            'description' => $this->description,
        ];
    }

    public function shouldBeSearchable()
    {
        // Индексируем только товары, которые не удалены и имеют название
        return !is_null($this->name) && trim($this->name) !== '';
    }

    /**
     * Accessors & Mutators
     */
    
    /**
     * Get the price_rrc attribute (alias for RRC)
     */
    protected function priceRrc(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->RRC,
        );
    }

    /**
     * Get formatted price
     */
    public function getFormattedPriceAttribute()
    {
        return number_format($this->RRC, 0, '', ' ');
    }

    /**
     * Get main name and description from name field
     */
    public function getNamePartsAttribute()
    {
        $nameParts = explode(',', $this->name, 2);
        $mainName = trim($nameParts[0]);
        $description = isset($nameParts[1]) ? trim($nameParts[1]) : ($this->packaging ?? 'пласт. (уп. по 50 шт)');
        
        return [
            'main_name' => $mainName,
            'description' => $description
        ];
    }
}