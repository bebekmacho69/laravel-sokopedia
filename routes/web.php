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

Auth::routes();

Route::get('/', function () {
    return redirect('/index');
});

Route::get('/index','indexController@index');

Route::group(['middleware' => ['auth']], function () { 
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/home/search/','productController@searchProduct');
    Route::get('productDetails/get/{id}', 'productController@productDetails2');
    Route::post('productDetails/post/toCart2', 'productController@toCart2');
    Route::get('/cart','transactionController@cart');
    Route::get('/cart/clear','transactionController@cartClear');
    Route::get('/cart/checkout','transactionController@checkout');

    Route::get('/cart/edit/{id}','transactionController@cartEdit');
    Route::post('/cart/update', 'transactionController@cartUpdate');
    Route::get('/cart/delete/{id}','transactionController@cartDelete');
    Route::get('/history', 'transactionController@transactionHistory');
    Route::get('/history/get/{id}', 'transactionController@transactionHistoryDetails');
    Route::get('/history/getProduct/{id}', 'productController@historyProduct');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('listProducts', 'adminController@listProducts')->name('admin.products');
    Route::get('listProducts/delete/{id}/','adminController@deleteProduct');
    Route::post('listProducts/insert/','adminController@insertProduct');

    // Route::get('editProduct/','adminController@editProductPage');
    Route::get('editProduct/{id}','adminController@editProduct');
    Route::post('editProduct/update/','adminController@updateProduct');
    
    Route::get('listCategory', 'adminController@listCategory');
    Route::post('listCategory/insert', 'adminController@insertCategory');
    Route::get('listCategory/delete/{id}', 'adminController@deleteCategory');

    Route::get('editCategory/{id}', 'adminController@editCategory');
    Route::post('editCategory/update/', 'adminController@updateCategory');
});

