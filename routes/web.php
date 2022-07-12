<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', 'HomeController@index')->name('home');

// Website
Route::name('front.')->group(function(){
    Route::get('/', 'Front\FrontController@index')->name('home');

    // Product details
    Route::prefix('product')->name('product.')->group(function() {
        Route::get('/', 'Front\ProductController@index')->name('list');
        Route::get('/{slug}', 'Front\ProductController@details')->name('details');
    });
    // Cart details
    Route::prefix('cart')->name('cart.')->group(function() {
        Route::get('/', 'Front\CartController@index')->name('index');
    });
    // Collection
    Route::prefix('collection')->name('collection.')->group(function() {
        Route::get('/', 'Front\CollectionController@index')->name('index');
        Route::get('/{slug}', 'Front\CollectionController@detail')->name('category');
    });
    // Category
    Route::prefix('categories')->name('category.')->group(function(){
        Route::get('/{slug}', 'Front\CategoryController@subCategorylist')->name('details');
        Route::get('/{cat_slug}/{slug}', 'Front\CategoryController@SubCatWiseProduct')->name('sub_category_details');
    });
    // Route::
});

Auth::routes();

// Admin  Guard
Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin'])->group(function() {
        Route::view('/login', 'admin.auth.login')->name('login');
        Route::post('/check', 'Admin\AdminController@check')->name('login.check');
    });

    Route::middleware(['auth:admin'])->group(function() {
        // dashboard
        Route::get('/home', 'Admin\AdminController@home')->name('home');

         // collection
        Route::prefix('collection')->name('collection.')->group(function() {
            Route::get('/', 'Admin\CollectionController@index')->name('index');
            Route::post('/store', 'Admin\CollectionController@store')->name('store');
            Route::get('/{id}/view', 'Admin\CollectionController@show')->name('view');
            Route::post('/{id}/update', 'Admin\CollectionController@update')->name('update');
            Route::get('/{id}/status', 'Admin\CollectionController@status')->name('status');
            Route::get('/{id}/delete', 'Admin\CollectionController@destroy')->name('delete');
        });

        // categories
        Route::prefix('category')->name('category.')->group(function(){
            Route::get('/', 'Admin\CategoryController@index')->name('index');
            Route::post('/store', 'Admin\CategoryController@store')->name('store');
            Route::get('/{id}/view', 'Admin\CategoryController@show')->name('view');
            Route::post('/{id}/update', 'Admin\CategoryController@update')->name('update');
            Route::get('/{id}/status', 'Admin\CategoryController@status')->name('status');
            Route::get('/{id}/delete', 'Admin\CategoryController@destroy')->name('delete');
        });
        // sub-category
        Route::prefix('subcategory')->name('subcategory.')->group(function() {
            Route::get('/', 'Admin\SubCategoryController@index')->name('index');
            Route::post('/store', 'Admin\SubCategoryController@store')->name('store');
            Route::get('/{id}/view', 'Admin\SubCategoryController@show')->name('view');
            Route::post('/{id}/update', 'Admin\SubCategoryController@update')->name('update');
            Route::get('/{id}/status', 'Admin\SubCategoryController@status')->name('status');
            Route::get('/{id}/delete', 'Admin\SubCategoryController@destroy')->name('delete');
        });

         // product
         Route::prefix('product')->name('product.')->group(function() {
            Route::get('/list', 'Admin\ProductController@index')->name('index');
            Route::get('/create', 'Admin\ProductController@create')->name('create');
            Route::post('/store', 'Admin\ProductController@store')->name('store');
            Route::get('/{id}/view', 'Admin\ProductController@show')->name('view');
            Route::get('/{id}/edit', 'Admin\ProductController@edit')->name('edit');
            Route::post('/{id}/update', 'Admin\ProductController@update')->name('update');
            Route::get('/{id}/status', 'Admin\ProductController@status')->name('status');
            Route::get('/{id}/delete', 'Admin\ProductController@destroy')->name('delete');
        });

        // banner
        Route::prefix('banner')->name('banner.')->group(function(){
            Route::get('/list', 'Admin\BannerController@index')->name('index');
            Route::post('/store', 'Admin\BannerController@store')->name('store');
            Route::post('/update/{id}', 'Admin\BannerController@update')->name('update');
            Route::get('/view/{id}', 'Admin\BannerController@show')->name('view');
            Route::get('/status/{id}', 'Admin\BannerController@status')->name('status');
            Route::get('/delete/{id}', 'Admin\BannerController@destroy')->name('delete');
        });

        // Website
        Route::prefix('site')->name('site.')->group(function(){
            Route::get('/', 'Admin\SocialController@index')->name('index');
            Route::post('/store', 'Admin\SocialController@store')->name('store');
            Route::post('/update/{id}', 'Admin\SocialController@update')->name('update');
            Route::get('/view/{id}', 'Admin\SocialController@show')->name('view');
            Route::get('/status/{id}', 'Admin\SocialController@status')->name('status');
            Route::get('/delete/{id}', 'Admin\SocialController@destroy')->name('delete');
        });

        // About us
        Route::prefix('about-us')->name('aboutus.')->group(function(){
            Route::get('/', 'Admin\AboutUsController@index')->name('index');
            Route::get('/create', 'Admin\AboutUsController@create')->name('create');
            Route::post('/store', 'Admin\AboutUsController@store')->name('store');
        });

        // order
        Route::prefix('order')->name('order.')->group(function() {
            Route::get('/', 'Admin\OrderController@index')->name('index');
            Route::get('/{id}/view', 'Admin\OrderController@show')->name('view');
            Route::get('/{id}/status/{status}', 'Admin\OrderController@status')->name('status');
        });
    });

});



