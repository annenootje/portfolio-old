<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contactdetail;
use App\Social;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

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
        View::composer('layout', function ($view) {
            $view->with('contactdetail', Contactdetail::all())->with('socials', Social::all());
        });
    }
}
