<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class EventItem extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'details',
        'event_date',
        'location',
        'mode',
        'status',
        'is_featured',
    ];

    protected $casts = [
        'event_date' => 'datetime',
        'is_featured' => 'boolean',
    ];

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published');
    }
}
