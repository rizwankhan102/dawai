<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineSchedule extends Model
{
    protected $fillable = [
        'medicine_id',
        'dose_amount',
        'frequency',
        'dose_time',
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }

    public function doseLogs()
    {
        return $this->hasMany(Doselog::class, 'medicine_schedule_id');
    }
}