<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function hasRole(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'user_id');
    }
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
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
