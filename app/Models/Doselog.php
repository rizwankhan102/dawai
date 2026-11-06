<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doselog extends Model
{
    protected $table = 'doselogs';

    protected $fillable = [
        'medicine_schedule_id',
        'schedule_date',
        'status',
        'taken_at',
    ];

    protected function casts(): array
    {
        return [
            'schedule_date' => 'date',
            'taken_at' => 'datetime',
        ];
    }

    public function medicineSchedule()
    {
        return $this->belongsTo(MedicineSchedule::class);
    }
}