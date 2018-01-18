<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Workshop;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Send database from DB to includes. 
        view()->composer('includes.footer', function($view)
        {
            $workshops = Workshop::all();
            $view->with('workshops', $workshops);
        });

        view()->composer('includes.nav', function($view)
        {
            $workshops = Workshop::all();
            $view->with('workshops', $workshops);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
