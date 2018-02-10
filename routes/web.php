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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('/logout', function(){
    \Auth::logout();
    
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    
    Route::get('/order', 'OrderController@index');
    Route::post('/order', 'OrderController@add');
    
    Route::get('/balance', 'PageController@balance');
    
    Route::get('/orders', 'OrderController@orders')->name('orders');
    
    Route::get('/free-kassa-success', 'PageController@acceptedPayment');
    
    Route::get('/free-kassa-fail', 'PageController@unacceptedPayment');
    
    Route::get('/contact', 'PageController@messages');
    Route::post('/contact', 'PageController@messageAdd');
});

Route::post('/free-kassa-result', 'FkController@result');

Route::group(['prefix' => 'web-admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin'] ], function () {
    Route::get('/', 'OrderController@index')->name('admin.index');
    Route::get('/messages', 'PageController@messages');
    Route::get('/types-of-promotions', 'Promotions@index')->name('admin.promotions');
    Route::get('/add-promotion', 'Promotions@addPromotion')->name('admin.promotion_link');
    Route::post('/types-of-promotions/add', 'Promotions@add')->name('admin.addPromotion');
    Route::get('/types-of-promotions/edit/{price}', 'Promotions@edit')->name('admin.promotion.edit');
    Route::post('/types-of-promotions/update/{price}', 'Promotions@update')->name('admin.promotion.update');
    Route::post('/types-of-promotion/del', 'Promotions@del');
    Route::post('/orders/ready', 'OrderController@ready');
});

//Route::get('/home', 'HomeController@index')->name('home');
