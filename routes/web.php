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

Route::get('/indexUser','indexController@indexUser');

Route::get('/indexGuest', 'indexController@indexGuest');

Route::get('/historyDetails', 'transactionController@transactionHistoryDetails');

Route::get('/productDetails', 'productController@productDetails');

Route::get('productDetails/get/{id}', 'productController@productDetails2');

// ADD TO CART
Route::get('productDetails/toCart', 'productController@toCart');
// ADD TO CART ALTERNATE
Route::post('productDetails/post/toCart2', 'productController@toCart2');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart','transactionController@transactionCart');

Route::get('/history', 'transactionController@transactionHistory');

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

