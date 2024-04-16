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
            'roles' => \App\Models\Role::class,
            'users' => \App\Models\User::class,
            'companies' => \App\Models\Company::class,
            'talents' => \App\Models\Talent::class,
            'operators' => \App\Models\Operator::class,
            'posts' => \App\Models\Post::class,
            'applications' => \App\Models\Application::class,
            'tags' => \App\Models\Tag::class,
            'media' => \App\Models\Media::class
        ]);
    }
}
