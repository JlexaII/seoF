<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    public function boot(): void
    {
        View::composer('home', function ($view) {
            $view->with([
                'data' => Post::where('status', 2)->get()
            ]);
        });
    }
}
