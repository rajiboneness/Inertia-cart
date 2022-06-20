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
    });

});



