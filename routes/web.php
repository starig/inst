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
    Route::get('/prizes', 'OrderController@prizes')->name('prizes');
    Route::post('/prizes/add', 'OrderController@prizeAdd');
    
    Route::get('/free-kassa-success', 'PageController@acceptedPayment');
    
    Route::get('/free-kassa-fail', 'PageController@unacceptedPayment');
    
    Route::get('/contact', 'PageController@messages');
    Route::post('/contact', 'PageController@messageAdd');
    
    Route::get('/cases', 'PageController@cases');
});

Route::post('/free-kassa-result', 'FkController@result');

Route::group(['prefix' => 'web-admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin'] ], function () {
    Route::get('/', 'OrderController@index')->name('admin.index');
    Route::get('/case-orders', 'CasesController@caseOrders')->name('admin.caseOrders');
    Route::get('/messages', 'PageController@messages');
    Route::get('/types-of-promotions', 'Promotions@index')->name('admin.promotions');
    Route::get('/cases', 'CasesController@cases')->name('admin.cases');
    Route::post('/cases/del', 'CasesController@del');
    Route::get('/add-case', 'CasesController@addCase')->name('admin.addCase');
    Route::post('/add-case', 'CasesController@create')->name('admin.addCasePost');
    Route::get('/cases/edit/{case}', 'CasesController@edit')->name('admin.cases.edit');
    Route::post('/cases/update/{case}', 'CasesController@update')->name('admin.cases.update');
    Route::get('/add-promotion', 'Promotions@addPromotion')->name('admin.promotion_link');
    Route::post('/types-of-promotions/add', 'Promotions@add')->name('admin.addPromotion');
    Route::get('/types-of-promotions/edit/{price}', 'Promotions@edit')->name('admin.promotion.edit');
    Route::post('/types-of-promotions/update/{price}', 'Promotions@update')->name('admin.promotion.update');
    Route::post('/types-of-promotion/del', 'Promotions@del');
    Route::post('/orders/ready', 'OrderController@ready');
    Route::post('/case-orders/ready', 'CasesController@ready');
});

//Route::get('/home', 'HomeController@index')->name('home');
