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
                'companies' => \App\Models\Company::all(),
                'users' => \App\Models\User::all(),
                'posts' => \App\Models\Post::all(),
                'applications' => \App\Models\Application::all(),
                'media' => \App\Models\Media::all(),
                'cities' => \App\Models\City::cities(),
                'functions' => \App\Enums\Functions::getValues(),
                'industries' => \App\Enums\Industries::getValues(),
                'postTypes' => \App\Enums\PostType::getValues(),
                // Add other data variables here
            ]);
        });
        view()->composer('admin.*', function ($view) {
            $view->with([
                // 'companies' => \App\Models\Company::all()
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
