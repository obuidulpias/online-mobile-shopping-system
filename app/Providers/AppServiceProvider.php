<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share('key', 'value');//all view file e data trasfer system
        View::composer('front-end.includes.menu', function($view){
          $view->with('categories', Category::where('publication_status', 1)->get());//specific view
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
