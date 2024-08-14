<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_id', 'category_id', 'sub_category_id', 'name', 'slug', 'price', 'short_description', 'long_description', 'total_beds', 'total_washrooms', 'sq_ft', 'images', 'aminities','location_map_url', 'video_url',
    ];

    protected $casts = [
        'images' => 'array',
        'aminities' => 'array',
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($property) {
            $property->slug = Str::slug($property->name, '-');
        });
    }
}
