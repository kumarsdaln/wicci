<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ResourceItem extends Model
{
    protected $fillable = [
        'type',
        'title',
        'slug',
        'excerpt',
        'content',
        'author_name',
        'status',
        'published_at',
        'sort_order',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'sort_order' => 'integer',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published');
    }
}
