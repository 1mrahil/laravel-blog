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
/*Route::get('/pages/test/', function () {
    return view('pages.test.index');
});

Route::get('/pages/test/contact', function () {
    return view('pages.test.contact');
});*/



Route::get('pages/blog/contact', 'ContactUsController@contactUs');

Route::post('pages/blog/contact', ['as' => 'contactus.store', 'uses' => 'ContactUsController@contactUsPost'] );

Route::resource('pages/blog', 'BlogController');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
