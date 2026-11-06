<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    protected $fillable = [
    'user_id',
    'family_id',
    'name',
    'relationship',
    'date_of_birth',
    'gender',
    'profile_image',
];
public function family()
{
    return $this->belongsTo(Family::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}
public function medicines()
{
    return $this->hasMany(Medicine::class);
}
public function Prescription(){
    return $this->hasMany( Prescription::class);
}
}

