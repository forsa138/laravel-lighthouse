<?php

namespace App\Providers;

use App\PlatformModel; // write model name here
use Illuminate\Support\ServiceProvider;

class DynamicPlatformname extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('platformname_array', PlatformModel::all());
        });
    }

}
