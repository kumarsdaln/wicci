<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    protected $fillable = [
        'event_key',
        'event_title',
        'full_name',
        'email',
        'phone',
        'profession',
        'organization',
        'participation_mode',
    ];
}
