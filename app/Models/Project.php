<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_id',
        'thumbnail_image',
        'developer_image',
        'hero_image',
        'cover_image',
        'price',
        'developer_name',
        'hand_over_date',
        'long_description',
        'project_images',
        'during_construction',
        'during_hand_over',
        'slug',
        'project_name',
        'project_address',
        'project_location_url',
        'project_video',
        'project_boucher_image',
    ];

    protected $casts = [
        'project_images' => 'array',
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = Str::slug($project->project_name);
        });

    }
}
