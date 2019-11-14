<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

use App\Repositories\CustomerRepository;
use App\Repositories\Impl\CustomerRepositoryImpl;

use App\Services\CustomerService;
use App\Services\Impl\CustomerServiceImpl;

use App\Repositories\PostRepository;
use App\Repositories\Impl\PostRepositoryImpl;

use App\Services\PostService;
use App\Services\Impl\PostServiceImpl;


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
            PostRepository::class,
            PostRepositoryImpl::class
        );
        $this->app->singleton(
            PostService::class,
            PostServiceImpl::class
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
