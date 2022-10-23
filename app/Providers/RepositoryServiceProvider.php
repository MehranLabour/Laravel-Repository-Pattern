<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Infrastructure\EloquentRepository\BaseRepository;
use App\Infrastructure\EloquentRepository\User\UserRepository;
use App\DomainService\RepositoryInterface;
use App\DomainService\User\UserRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, BaseRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
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
