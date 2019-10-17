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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//facebook socialite

Route::get('login/facebook', 'FacebookAuthController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'FacebookAuthController@handleProviderCallback');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@back')->name('back');

Route::group(['prefix'=>'shirts'],function ()
{
    Route::get('/', 'ShirtController@index')->name('shirts.index');
//    Route::get('/create','ShirtController@create')->name('shirts.create');
//    Route::post('/','ShirtController@store')->name('shirts.store');
//  //  Route::get('{shirt_id}','ShirtController@show')->name('shirts.show');
//    Route::get('{shirt_id}/edit','ShirtController@edit')->name('shirts.edit');
//    Route::patch('{shirt_id}','ShirtController@update')->name('shirts.update');
//  //  Route::get('{shirt_id}','ShirtController@destroy')->name('shirts.destroy');
//    Route::delete('{shirt_id}','ShirtController@destroy')->name('shirts.destroy');
//    Route::get('/detail','ShirtController@getDetail')->name('shirts.getDetail');
});


Route::get('/cart','ShoppingCartController@index')->name('cart.index');
Route::get('/add-to-cart/{id}','ShoppingCartController@addToCart')->name('cart.addToCart');
Route::post('/update-cart/{id}','ShoppingCartController@updateProductIntoCart')->name('cart.updateIntoCart');
Route::get('/remove-cart/{id}','ShoppingCartController@removeProductIntoCart')->name('cart.removeIntoCart');

Route::group(['prefix'=>'bills'],function ()
{
    Route::get('create','BillController@create')->name('bills.create')->middleware('auth');
    Route::post('store','BillController@store')->name('bills.store');
    Route::get('listBills','BillController@listBills')->name('bills.listBills');
    Route::get('detail/{id}','BillController@billDetail')->name('bills.billDetail');
});

Route::get('products/search','ProductController@search')->name('products.search');
Route::get('products/null-item','ProductController@productNull')->name('products.null');
Route::get('products/{id}/update','ProductController@updateQty')->name('products.updateQty');
Route::get('products/men-clothes','ProductController@getMenProduct')->name('products.menclothes');
Route::resource('products','ProductController');

Route::resource('customers','CustomerController');

Route::get('/test','HomeController@index')->name('home.index');

