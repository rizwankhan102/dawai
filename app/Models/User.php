<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function ownedFamilies()
    {
        return $this->hasMany(Family::class, 'owner_id');
    }

    public function families()
{
    return $this->belongsToMany(Family::class)
        ->using(FamilyUser::class)
        ->withPivot(['role', 'status'])
        ->withTimestamps();
}

    public function familyMembers()
    {
        return $this->hasMany(FamilyMember::class);
    }
}