<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Auth;

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
        view()->composer('homepage', function ($view) {
            $view->with([
                'tags' => \App\Models\Tag::all(),
                'posts' => \App\Models\Post::where('isValid', true)->get(),
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
                'posts' => \App\Models\Post::all(),
                'applications' => \App\Models\Application::all(),
                'companies' => \App\Models\Company::all(),
                'users' => \App\Models\User::all(),
                'operators' => \App\Models\User::where('role_id', 3)->get(),
                'talents' => \App\Models\User::where('role_id', 2)->get(),
                // Add other data variables here
            ]);
        });
        // view()->composer('operator.*', function ($view) {
        //     $view->with([
        //         'posts' => \App\Models\Post::where('user_id', Auth::id())->get(),
        //     ]);
        // });

        Relation::enforceMorphMap([
            'role' => \App\Models\Role::class,
            'user' => \App\Models\User::class,
            'company' => \App\Models\Company::class,
            'post' => \App\Models\Post::class,
            'application' => \App\Models\Application::class,
            'tag' => \App\Models\Tag::class,
            'media' => \App\Models\Media::class,
            'link' => \App\Models\Link::class,
        ]);

    }
}
