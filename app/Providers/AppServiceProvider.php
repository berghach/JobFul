<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

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
        view()->composer('*', function ($view) {
            $view->with([
                'tags' => \App\Models\Tag::all(),
                // Add other data variables here
            ]);
        });
        view()->composer('admin.*', function ($view) {
            $view->with([
                'roles' => \App\Models\Role::all()
            ]);
        });

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
