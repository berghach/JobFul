<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'url',
    ];

    public function linkable(): MorphTo
    {
        return $this->morphTo();
    }
}
