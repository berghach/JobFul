<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Operator extends User
{
    use HasFactory;

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
    public function posts(): MorphMany
    {
        return $this->morphMany(Post::class, 'postable');
    }
    public function images(): MorphMany
    {
        return $this->morphMany(Media::class, 'mediable')->where('type', 'image');
    }
    public function documents(): MorphMany
    {
        return $this->morphMany(Media::class, 'mediable')->where('type', 'document');
    }
}
