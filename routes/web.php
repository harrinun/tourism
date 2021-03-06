<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Hotel Routes
|--------------------------------------------------------------------------
*/
Route::resource('hotels','HotelsController');


/*
|--------------------------------------------------------------------------
| Attraction Route
|--------------------------------------------------------------------------
*/
Route::resource('attractions','AttractionsController');

/*
|--------------------------------------------------------------------------
| Attraction Types
|--------------------------------------------------------------------------
*/
Route::resource('attraction-types','AttractionTypesController');

Route::post('images/upload',['as'=>'images.upload','uses'=>'ImagesController@store']);
Route::resource('images','ImagesController');

Route::get('destinations','HomeController@destinations');
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('dashboard','HomeController@index');

    Route::get('hotels/{hotel}/upload',['as'=>'hotels.upload','uses'=>'HotelsController@upload']);
    Route::resource('hotels','HotelsController',['as'=>'admin']);

    Route::resource('attractions','AttractionsController',['as'=>'admin']);

    Route::resource('attraction-types','AttractionTypesController',['as'=>'admin']);
    Route::resource('room-types','RoomTypesController',['as'=>'admin']);
    Route::resource('rooms','RoomsController',['as'=>'admin']);
});
