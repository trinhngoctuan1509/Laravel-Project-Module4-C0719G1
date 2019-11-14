<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CommentRepository;
use App\Repositories\Impl\CommentRepositoryImpl;
use App\Services\CommentService;
use App\Services\Impl\CommentServiceImpl;

use App\Repositories\PostRepository;
use App\Repositories\Impl\PostRepositoryImpl;

use App\Services\PostService;
use App\Services\Impl\PostServiceImpl;

use App\Repositories\Impl\CategoryReponsitoryImpl;
use App\Repositories\CategoryReponsitory;
use App\Services\CategoryService;
use App\Services\Impl\CategoryServiceImpl;

use App\Repositories\RegionRepository;
use App\Repositories\Impl\RegionRepositoryImpl;
use App\Services\Impl\RegionServiceImpl;
use App\Services\RegionService;


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
        $this->app->singleton(
            PostRepository::class,
            PostRepositoryImpl::class
        );
        $this->app->singleton(
            PostService::class,
            PostServiceImpl::class
        );

        // Category
        $this->app->singleton(
            CategoryReponsitory::class,
            CategoryReponsitoryImpl::class
        );
        $this->app->singleton(
            CategoryService::class,
            CategoryServiceImpl::class
        );

        // Region
        $this->app->singleton(
            RegionRepository::class,
            RegionRepositoryImpl::class
        );
        $this->app->singleton(
            RegionService::class,
            RegionServiceImpl::class
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
