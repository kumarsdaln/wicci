<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VolunteerApplication extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'city',
        'area_of_interest',
        'availability',
        'message',
    ];
}
