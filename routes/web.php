<?php

namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers;

//use auth;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'Frontend\FrontendController@index');
Route::get('category', 'Frontend\FrontendController@category');

Route::get('view_category/{name}', 'Frontend\FrontendController@view_category');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', 'HomeController@index');


//-----------------------------------back_end----------------------
//-----------------------------------back_end----------------------
//-----------------------------------back_end----------------------

Route::middleware(['auth', 'isAdmin'])->group( function(){
    //Route::get('/dashboard', function(){
        //return view('admin.index');
        //return "this is admin tor bap!!!";
    //});

      Route::get('/dashboard', 'Admin\FrontendController@index');

      Route::get('categories', 'Admin\CategoryController@index');

      Route::get('add_category', 'Admin\CategoryController@add');


      Route::post('insert_category', 'Admin\CategoryController@insert_data');


      //Route::get('edit_prod/{id}', [CategoryController::class, 'edit']);

      Route::get('edit_category/{id}', 'Admin\CategoryController@edit');

      Route::put('update_category/{id}', 'Admin\CategoryController@update');

      Route::get('delete_category/{id}', 'Admin\CategoryController@delete');


      //-----------------------------------------------products---------------routes-----------------

      Route::get('products', 'Admin\ProductController@index');

      Route::get('add_products', 'Admin\ProductController@add');

      Route::post('insert_products', 'Admin\ProductController@insert');

      Route::get('edit_prod/{id}', 'Admin\ProductController@edit');

      Route::get('delete_prod/{id}', 'Admin\ProductController@delete');

      Route::put('update_products/{id}', 'Admin\ProductController@update');

});
