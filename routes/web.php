<?php

use Illuminate\Support\Facades\Route;

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

//app-index
Route::get('/','PageController@home' )->name('home');        
//profile
Route::get('profile/', function () {
    return view('frontend.pages.profile.index');
        })->name('profile');
//product-page
    Route::get('product/','PageController@product' )->name('product');

//product-category;
//product-category-women;
    Route::get('product/product-category/woman', 'PageController@womanproduct')->name('product-category-women');
//product-category-man;
    Route::get('product/product-category/man', 'PageController@manproduct')->name('product-category-man');

//contact-page;
    Route::get('contacts/', function () {
        return view('frontend.pages.contact.index');
            })->name('contact');
                Auth::routes();

//home-page
    Route::get('/admin/home', 'HomeController@index')->name('admin.home');

//admin-dashboard
Route::group(['middleware' => 'admin','auth'], function () {
    Route::get('/admin', function () {
        return view('backend.pages.dashboard.index');
    });
    // Slider Routes
    Route::group(['prefix' => 'admin/sliders' ], function(){
        //Route::get('/', 'PhotoController@index')->name('admin.sliders');
        Route::post('/store', 'PhotoController@store')->name('admin.slider.store');
        Route::post('/slider/edit/{id}', 'PhotoController@update')->name('admin.slider.update');
        Route::post('/slider/delete/{id}', 'PhotoController@delete')->name('admin.slider.delete');

        Route::get('/man', 'PhotoController@man')->name('admin.man');
        Route::get('/woman', 'PhotoController@woman')->name('admin.woman');
        Route::get('/client', 'PhotoController@client')->name('admin.client');
        Route::get('/own', 'PhotoController@own')->name('admin.own');
        Route::get('/logo', 'PhotoController@logo')->name('admin.logo');
    });




});
