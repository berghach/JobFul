<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends User
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'industry',
        'bio',
        'company_headquarter',
        'links',
        'logo',
    ];

    public function operators(): HasMany
    {
        return $this->hasMany(Operator::class, 'company_id', 'id');
    }
}
