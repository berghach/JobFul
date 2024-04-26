<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Company extends User
{
    use HasFactory;
    protected $fillable = [
        'name',
        'industry',
        'bio',
        'headquarter',
        'links',
        'logo',
    ];
    protected function casts(): array
    {
        return [
            'links' => AsArrayObject::class
        ];
    }

    public function operators(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'company_operators', 'company_id', 'operator_id');
    }
}
