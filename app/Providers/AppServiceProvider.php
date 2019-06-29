<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\BlogPost;
use App\Settings;
use View;

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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('index', function ($view) {
            $blogPosts = BlogPost::orderBy('created_at','desc')->limit(3)->get();
            $view->with('blogPosts', $blogPosts);
        });

        View::composer('indexListView', function ($view) {
            $blogPosts = BlogPost::orderBy('created_at','desc')->limit(3)->get();
            $view->with('blogPosts', $blogPosts);
        });

        View::composer('user.includes.footer', function ($view) {
            $settings = Settings::all();
            $view->with('settings', $settings);
        });
    }
}
