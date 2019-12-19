<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('username_array', User::all());
        });
    }

}
