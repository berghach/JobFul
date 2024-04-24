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
            'role' => \App\Models\Role::class,
            'user' => \App\Models\User::class,
            'company' => \App\Models\Company::class,
            'post' => \App\Models\Post::class,
            'application' => \App\Models\Application::class,
            'tag' => \App\Models\Tag::class,
            'media' => \App\Models\Media::class
        ]);
    }
}
