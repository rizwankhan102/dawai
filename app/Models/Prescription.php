<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'family_members_id',
        'doctor_name',
        'prescription_image',
        'prescription_date',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'prescription_date' => 'date',
        ];
    }

    public function familyMember()
    {
        return $this->belongsTo(FamilyMember::class, 'family_members_id');
    }
}