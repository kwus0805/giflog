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
Route::prefix('address')->middleware(['auth'])->namespace('App\Http\Controllers')->group(function() {
  Route::get('','AddressController@index')->name('addr.index');
  Route::get('create','AddressController@add')->name('addr.add');
  Route::get('edit','AddressController@edit')->name('addr.edit');
  Route::get('delete','AddressController@delete')->name('addr.del');

  Route::post('create','AddressController@create')->name('addr.create');
  Route::post('edit','AddressController@update')->name('addr.update');

});

Route::prefix('dashboard')->middleware(['auth'])->namespace('App\Http\Controllers')->group(function() {
  Route::get('','DashboardController@index')->name('dash.index');

});

Route::prefix('event')->middleware(['auth'])->namespace('App\Http\Controllers')->group(function() {
  Route::get('','EventController@index')->name('eve.index');
  Route::get('create','EventController@add')->name('eve.add');
  Route::get('edit','EventController@edit')->name('eve.edit');
  Route::get('delete','EventController@delete')->name('eve.del');

  Route::post('create','EventController@create')->name('eve.create');
  Route::post('edit','EventController@update')->name('eve.update');

});

Route::prefix('gift')->middleware(['auth'])->namespace('App\Http\Controllers')->group(function() {
  Route::get('','GiftController@index')->name('gift.index');
  Route::get('create','GiftController@add')->name('gift.add');
  Route::get('edit','GiftController@edit')->name('gift.edit');
  Route::get('delete','GiftController@delete')->name('gift.del');

  Route::post('create','GiftController@create')->name('gift.create');
  Route::post('edit','GiftController@update')->name('gift.update');

});

Route::prefix('group')->middleware(['auth'])->namespace('App\Http\Controllers')->group(function() {
  Route::get('','GroupController@index')->name('gr.index');
  Route::get('create','GroupController@add')->name('gr.add');
  Route::get('edit','GroupController@edit')->name('gr.edit');
  Route::get('delete','GroupControllerssController@delete')->name('gr.del');

  Route::post('create','GroupControllerssController@create')->name('gr.create');
  Route::post('edit','GroupController@update')->name('gr.update');

});

Route::prefix('present')->middleware(['auth'])->namespace('App\Http\Controllers')->group(function() {
  Route::get('','PresentController@index')->name('pres.index');
  Route::get('create','PresentController@add')->name('pres.add');
  Route::get('edit','PresentController@edit')->name('pres.edit');
  Route::get('delete','PresentController@delete')->name('pres.del');

  Route::post('create','PresentController@create')->name('pres.create');
  Route::post('edit','PresentController@update')->name('pres.update');

});
