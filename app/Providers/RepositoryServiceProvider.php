<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Tour\Repositories\HotelRepository::class, \App\Tour\Eloquent\HotelRepositoryEloquent::class);
        $this->app->bind(\App\Tour\Repositories\AttractionRepository::class, \App\Tour\Eloquent\AttractionRepositoryEloquent::class);
        $this->app->bind(\App\Tour\Repositories\RestaurantRepository::class, \App\Tour\Eloquent\RestaurantRepositoryEloquent::class);
        $this->app->bind(\App\Tour\Repositories\RoomRepository::class, \App\Tour\Eloquent\RoomRepositoryEloquent::class);
        $this->app->bind(\App\Tour\Repositories\RoomTypeRepository::class, \App\Tour\Eloquent\RoomTypeRepositoryEloquent::class);
        $this->app->bind(\App\Tour\Repositories\AttractionTypeRepository::class, \App\Tour\Eloquent\AttractionTypeRepositoryEloquent::class);
        $this->app->bind(\App\Tour\Repositories\ImageRepository::class, \App\Tour\Eloquent\ImageRepositoryEloquent::class);
        $this->app->bind(\App\Tour\Repositories\PermissionRepository::class, \App\Tour\Eloquent\PermissionRepositoryEloquent::class);
        $this->app->bind(\App\Tour\Repositories\RoleRepository::class, \App\Tour\Eloquent\RoleRepositoryEloquent::class);
        $this->app->bind(\App\Tour\Repositories\UserRepository::class, \App\Tour\Eloquent\UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
