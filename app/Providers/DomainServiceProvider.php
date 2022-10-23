<?php

namespace App\Providers;

use App\DomainService\DomainInterface;
use App\DomainService\BaseDomain;
use App\DomainService\User\UserDomain;
use App\DomainService\User\UserDomainInterface;
use Illuminate\Support\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DomainInterface::class, BaseDomain::class);
        $this->app->bind(UserDomainInterface::class, UserDomain::class);
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
