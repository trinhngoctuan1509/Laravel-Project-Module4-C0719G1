<?php

namespace App\Providers;


use App\Repositories\Impl\LoginReponsitoryImpl;
use App\Repositories\Impl\UserRepositoryImpl;
use App\Repositories\LoginReponsitory;
use App\Repositories\UserRepository;

use App\Services\HelpsService;
use App\Services\Impl\HelpsServiceImpl;


use App\Services\Impl\LoginServiceImpl;

use App\Services\Impl\UserServiceImpl;
use App\Services\LoginService;
use App\Services\UserService;

use App\Repositories\CustomerRepository;
use App\Repositories\Impl\CustomerRepositoryImpl;
use App\Services\CustomerService;
use App\Services\Impl\CustomerServiceImpl;

use App\User;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CommentRepository;
use App\Repositories\Impl\CommentRepositoryImpl;
use App\Services\CommentService;
use App\Services\Impl\CommentServiceImpl;

use App\Repositories\HelpsRepository;
use App\Repositories\Impl\HelpsRepositoryImpl;


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

use App\Repositories\SellerReponsitory;
use App\Repositories\Impl\SellerReponsitoryImpl;
use App\Services\Impl\SellerServiceImpl;
use App\Services\SellerService;

use App\Repositories\PostOfTypeReponsitory;
use App\Repositories\Impl\PostOfTypeReponsitoryImpl;
use App\Services\Impl\PostOfTypeServiceImpl;
use App\Services\PostOfTypeService;

use App\Repositories\StatusOfPostRepository;
use App\Repositories\Impl\StatusOfPostRepositoryImpl;
use App\Services\Impl\StatusOfPostServiceImpl;
use App\Services\StatusOfPostService;

use App\Repositories\DirectionRepository;
use App\Repositories\Impl\DirectionRepositoryImpl;
use App\Services\Impl\DirectionServiceImpl;
use App\Services\DirectionService;



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
            HelpsRepository::class,
            HelpsRepositoryImpl::class
        );
        $this->app->singleton(
            HelpsService::class,
            HelpsServiceImpl::class
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


        // Seller
        $this->app->singleton(
            SellerReponsitory::class,
            SellerReponsitoryImpl::class
        );
        $this->app->singleton(
            SellerService::class,
            SellerServiceImpl::class
        );

        // PostOfType
        $this->app->singleton(
            PostOfTypeReponsitory::class,
            PostOfTypeReponsitoryImpl::class
        );
        $this->app->singleton(
            PostOfTypeService::class,
            PostOfTypeServiceImpl::class
        );

        // StatusOfPost
        $this->app->singleton(
            StatusOfPostRepository::class,
            StatusOfPostRepositoryImpl::class
        );
        $this->app->singleton(
            StatusOfPostService::class,
            StatusOfPostServiceImpl::class
        );

        // Direction
        $this->app->singleton(
            DirectionRepository::class,
            DirectionRepositoryImpl::class
        );
        $this->app->singleton(
            DirectionService::class,
            DirectionServiceImpl::class
        );

        $this->app->singleton(
            UserRepository::class,
            UserRepositoryImpl::class
        );
        $this->app->singleton(
            UserService::class,
            UserServiceImpl::class

        );
        $this->app->singleton(
            LoginReponsitory::class,
            LoginReponsitoryImpl::class
        );
        $this->app->singleton(
            LoginService::class,
            LoginServiceImpl::class
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
