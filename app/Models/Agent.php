<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'descignation','whatsapp_number', 'phone_number', 'profile_image', 'rating',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
