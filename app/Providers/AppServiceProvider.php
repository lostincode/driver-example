<?php

namespace App\Providers;

use App\Search\SearchManager;
use App\Search\SearchInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->setupSearchDriver();
    }

    private function setupSearchDriver()
    {
        $this->app->singleton(SearchInterface::class, function ($app) {
            return (new SearchManager($app))->driver();
        });
    }
}
