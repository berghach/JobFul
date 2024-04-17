<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Operator extends User
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'industry',
        'bio',
        'location',
        'job',
        'company_id',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
