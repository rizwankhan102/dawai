<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineCatalog extends Model
{
    protected $fillable = [
        'brand_name',
        'generic_name',
        'active_ingredient',
        'strength',
        'dosage_form',
        'manufacturer',
        'price',
        'source',
        'source_date',
        'is_verified',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'source_date' => 'date',
            'is_verified' => 'boolean',
        ];
    }
}