<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Talent extends User
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'industry',
        'bio',
        'location',
        'job',
        'talent_type', 
    ];

    
}
