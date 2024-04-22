<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

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
    protected function casts(): array
    {
        return [
            'sections' => AsArrayObject::class
        ];
    }

    public function companyables(): MorphToMany
    {
        return $this->morphToMany(User::class, 'companyable');
    }
}
