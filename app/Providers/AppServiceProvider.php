<?php

namespace App\Providers;

use App\Repositories\Impl\UserRepositoryImpl;
use App\Repositories\UserRepository;
use App\Services\Impl\UserServiceImpl;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

use App\Repositories\CustomerRepository;
use App\Repositories\Impl\CustomerRepositoryImpl;
use App\Services\CustomerService;
use App\Services\Impl\CustomerServiceImpl;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CustomerRepository::class,
            CustomerRepositoryImpl::class
        );
        $this->app->singleton(
            CustomerService::class,
            CustomerServiceImpl::class
        );
        $this->app->singleton(
            UserRepository::class,
            UserRepositoryImpl::class
        );
        $this->app->singleton(
            UserService::class,
            UserServiceImpl::class
        );
    }

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
