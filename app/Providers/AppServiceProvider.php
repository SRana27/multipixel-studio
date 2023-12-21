<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use View;

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
        View::composer(['admin.includes.header'],function ($view) {
            $view->with('user', User::all());

        });
    }
}
