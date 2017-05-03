<?php

namespace App\Providers;

use App\Tour\Composers\DestinationPageComposer;
use App\Tour\Entities\Category;
use App\Tour\Entities\Hotel;
use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('welcome',DestinationPageComposer::class);
        view()->composer('admin.hotels.create',function ($view){
            $select = [
                'hotel_list' =>Hotel::pluck('name','id'),
                'category_list' => Category::pluck('name','id')
            ];
           $view->with('select',$select);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
