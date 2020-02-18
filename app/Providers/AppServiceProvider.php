<?php

namespace App\Providers;

use App\Contracts\Product\ProductRepositoryInterface;
use App\Contracts\Product\ProductServiceInterface;
use App\Contracts\User\UserRepositoryInterface;
use App\Contracts\User\UserServiceInterface;
use App\Http\Repositories\ProductRepository;
use App\Http\Repositories\UserRepository;
use App\Http\Services\ProductService;
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
    }
}
