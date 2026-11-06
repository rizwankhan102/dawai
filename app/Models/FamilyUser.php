<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class FamilyUser extends Pivot
{
    protected $table = 'family_user';

    public $incrementing = true;

    protected $fillable = [
        'family_id',
        'user_id',
        'role',
        'status',
    ];

    // FamilyUser belongs to one Family
    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    // FamilyUser belongs to one User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}