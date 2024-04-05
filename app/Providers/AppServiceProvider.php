<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
            'users' => \App\Models\User::class,
            'companies' => \App\Models\Company::class,
            'employees' => \App\Models\Employee::class,
            'freelancers' => \App\Models\Freelancer::class,
            'operators' => \App\Models\Operator::class,
            'admins' => \App\Models\Admin::class,
        ]);
    }
}
