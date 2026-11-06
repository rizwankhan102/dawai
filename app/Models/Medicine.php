<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'family_member_id',
        'name',
        'strength',
        'dosage',
        'instructions',
        'start_date',
        'end_date',
        'stock_quantity',
        'expiry_date',
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
            'expiry_date' => 'date',
        ];
    }

    public function familyMember()
    {
        return $this->belongsTo(FamilyMember::class);
    }

    public function schedules()
    {
        return $this->hasMany(MedicineSchedule::class);
    }
}