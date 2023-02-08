<?php

namespace App\Providers;

use App\Domains\TestServiceContainer\TestServiceContainer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //test service container
//        $this->app->bind('TestServiceContainer', function () {
//            return new TestServiceContainer();
//        });

//        $this->app->singleton('TestServiceContainer', function () {
//            return new TestServiceContainer();
//        });

        $this->app->instance('TestServiceContainer', new TestServiceContainer());
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       //
    }
}
