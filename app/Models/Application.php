<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function post():BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
    public function documents(): MorphMany
    {
        return $this->morphMany(Media::class, 'mediable')->where('type', 'document');
    }
}
