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

Route::get('/', function () {
    return redirect('/indexUser');
});

Route::get('/login', 'loginRegisterController@login');

Route::get('/register', 'loginRegisterController@register');

Route::get('/indexUser','indexController@indexUser');

Route::get('/indexGuest', 'indexController@indexGuest');

Route::get('/cart','transactionController@transactionCart');

Route::get('/history', 'transactionController@transactionHistory');

Route::get('/historyDetails', 'transactionController@transactionHistoryDetails');

Route::get('/productDetails', 'productController@productDetails');
