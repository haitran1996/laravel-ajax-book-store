<?php

namespace App\Providers;

use App\Contracts\Author\AuthorRepositoryInterface;
use App\Contracts\Author\AuthorServiceInterface;
use App\Contracts\Blog\BlogRepositoryInterface;
use App\Contracts\Blog\BlogServiceInterface;
use App\Contracts\Category\CategoryRepositoryInterface;
use App\Contracts\Category\CategoryServiceInterface;
use App\Contracts\Product\ProductRepositoryInterface;
use App\Contracts\Product\ProductServiceInterface;
use App\Contracts\Publisher\PublisherRepositoryInterface;
use App\Contracts\Publisher\PublisherServiceInterface;
use App\Contracts\User\UserRepositoryInterface;
use App\Contracts\User\UserServiceInterface;
use App\Http\Repositories\AuthorRepository;
use App\Http\Repositories\BlogRepository;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\ProductRepository;
use App\Http\Repositories\PublisherRepository;
use App\Http\Repositories\UserRepository;
use App\Http\Services\AuthorService;
use App\Http\Services\BlogService;
use App\Http\Services\CategoryService;
use App\Http\Services\ProductService;
use App\Http\Services\PublisherService;
use App\Http\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(ProductRepositoryInterface::class,ProductRepository::class);
        $this->app->singleton(ProductServiceInterface::class,ProductService::class);
        $this->app->singleton(UserRepositoryInterface::class,UserRepository::class);
        $this->app->singleton(UserServiceInterface::class,UserService::class);
        $this->app->singleton(CategoryRepositoryInterface::class,CategoryRepository::class);
        $this->app->singleton(CategoryServiceInterface::class,CategoryService::class);
        $this->app->singleton(BlogRepositoryInterface::class,BlogRepository::class);
        $this->app->singleton(BlogServiceInterface::class,BlogService::class);
        $this->app->singleton(AuthorRepositoryInterface::class,AuthorRepository::class);
        $this->app->singleton(AuthorServiceInterface::class,AuthorService::class);
        $this->app->singleton(PublisherRepositoryInterface::class,PublisherRepository::class);
        $this->app->singleton(PublisherServiceInterface::class,PublisherService::class);
    }
}
