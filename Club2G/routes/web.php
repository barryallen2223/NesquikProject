<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/treasure_hunt', 'App\Http\Controllers\TreasureController@index')->name("treasure.index");
Route::get('/treasure_hunt/{id}', 'App\Http\Controllers\TreasureController@show')->name("treasure.show"); 


Route::middleware('admin')->group(function () { 
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/treasures', 'App\Http\Controllers\Admin\AdminTreasureController@index')->name("admin.treasure.index"); 
Route::post('/admin/treasures/store', 'App\Http\Controllers\Admin\AdminTreasureController@store')->name("admin.treasure.store");
Route::delete('/admin/treasures/{id}/delete','App\Http\Controllers\Admin\AdminTreasureController@delete')->name("admin.treasure.delete");
Route::get('/admin/treasures/{id}/edit','App\Http\Controllers\Admin\AdminTreasureController@edit')->name("admin.treasure.edit");
Route::put('/admin/treasures/{id}/update','App\Http\Controllers\Admin\AdminTreasureController@update')->name("admin.treasure.update");  
});

Auth::routes();