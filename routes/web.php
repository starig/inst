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
    
    Route::get('/order', 'PageController@order');
    
    Route::get('/balance', 'PageController@balance');
    
    Route::get('/orders', 'PageController@orders');
    
    Route::get('/free-kassa-success', 'PageController@acceptedPayment');
    
    Route::get('/free-kassa-fail', 'PageController@unacceptedPayment');
});

Route::post('/free-kassa-result', 'FkController@result');

Route::group(['prefix' => 'web-admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin'] ], function () {
    Route::get('/', 'PageController@index')->name('admin.index');
});

//Route::get('/home', 'HomeController@index')->name('home');
