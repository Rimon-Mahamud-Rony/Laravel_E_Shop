<?php

namespace App\Http\Controllers\Admin;

//use auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

      Route::get('edit_prod/{id}', 'Admin\CategoryController@edit');

      Route::put('update_category/{id}', 'Admin\CategoryController@update');

      Route::get('delete_prod/{id}', 'Admin\CategoryController@delete');
});
