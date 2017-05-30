<?php

namespace App\Providers;

use App\Tour\Composers\DestinationPageComposer;
use App\Tour\Entities\AttractionType;
use App\Tour\Entities\Category;
use App\Tour\Entities\Hotel;
use App\Tour\Entities\Image;
use App\Tour\Entities\RoomType;
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
        view()->composer(['admin.hotels.create','admin.hotels.edit','admin.attractions.create'],function ($view){
            $select = [
                'hotel_list' =>Hotel::where('manager',auth()->id())->pluck('name','id'),
                'category_list' => Category::pluck('name','id'),
                'attractionType' => AttractionType::pluck('name','id'),
            ];
           $view->with('select',$select);
        });

        view()->composer(['admin.room._form_room'],function ($view){
            $select = [
                'hotels' =>Hotel::where('manager',auth()->id())->pluck('name','id'),
                'room_type' => RoomType::pluck('name','id'),
            ];
            $view->with('select',$select);
        });
        view()->composer('site.destination.index',function ($view){
           $data = [
               'destinations' => Hotel::all(),
                'images' => Image::all()
            ];
            $view->with('data',$data);
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
