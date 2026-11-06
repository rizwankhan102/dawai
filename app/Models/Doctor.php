<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'doctor_name',
        'specialization',
        'phone',
        'email',
        'clinic_name',
        'clinic_address',
    ];

    public function availabilities()
    {
        return $this->hasMany(DoctorAvailability::class);
    }
}