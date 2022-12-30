<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\StudentRepositoryServices;
use App\Services\DepartmentRepositoryServices;
use App\Services\FileSystemRepositoryServices;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('FileSystemRepositoryServices', function ($app) {
            return new FileSystemRepositoryServices;
        });
        // Department services register 
        $this->app->singleton('DepartmentRepositoryServices', function ($app) {
            return new DepartmentRepositoryServices;
        });
        // student services register 
        $this->app->singleton('StudentRepositoryServices', function ($app) {
            return new StudentRepositoryServices;
        });
    }
    // 
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
