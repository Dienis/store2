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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HomeController@home');

Route::get('catalogs', 'CatalogsController@index');

Route::get('catalogs/{id}', 'CatalogsController@show');

Route::get('catalogs/product/{id}', 'ProductController@show');

Route::get('about-us', 'PageController@index');

Route::get('news', 'NewsController@index');

Route::get('news/{id}', 'NewsController@show');

Route::post('/contactform', 'MailSetting@contactform');

Route::post('catalogs/product/{id}', 'ContactController@send');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
