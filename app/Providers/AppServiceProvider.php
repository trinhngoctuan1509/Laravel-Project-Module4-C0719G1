<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CommentRepository;
use App\Repositories\Impl\CommentRepositoryImpl;
use App\Services\CommentService;
use App\Services\Impl\CommentServiceImpl;

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
            CommentRepository::class,
            CommentRepositoryImpl::class
        );
        $this->app->singleton(
            CommentService::class,
            CommentServiceImpl::class
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
