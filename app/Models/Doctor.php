<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'speciality',
        'email',
        'phone',
        'license_number',
        'bio',
        'photo_url'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // Relationship: Doctor has many appointments (we'll use this later)
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
