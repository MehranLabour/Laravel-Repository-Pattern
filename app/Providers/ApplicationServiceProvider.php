<?php

namespace App\Providers;

use App\ApplicationService\BaseService;
use App\ApplicationService\ServiceInterface;
use App\ApplicationService\User\UserServiceInterface;
use App\ApplicationService\User\UserService;
use Illuminate\Support\ServiceProvider;

class ApplicationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceInterface::class, BaseService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
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
