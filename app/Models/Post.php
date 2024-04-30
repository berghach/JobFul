<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_type',
        'title',
        'description',
        'industry',
        'function',
        'location',
        'contract',
        'job_type',
        'study_level',
        'price',
        'user_id',
    ];

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function image(): MorphOne
    {
        return $this->morphOne(Media::class, 'mediable')->where('type', 'image');
    }
    public function documents(): MorphMany
    {
        return $this->morphMany(Media::class, 'mediable')->where('type', 'document');
    }
}
