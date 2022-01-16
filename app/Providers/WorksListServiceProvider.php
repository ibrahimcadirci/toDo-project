<?php

namespace App\Providers;

use App\Services\WorkList;
use Illuminate\Support\ServiceProvider;

class WorksListServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('worklist', function(){
            return new WorkList();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
