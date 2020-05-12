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

//Frontend
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');

//Backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

//CategoryProduct
Route::get('/add-category-product','CategoryController@add_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryController@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryController@delete_category_product');
Route::get('/all-category-product','CategoryController@all_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryController@active_category_product');
Route::get('/unactive-category-product/{category_product_id}','CategoryController@unactive_category_product');
Route::post('/save-category-product','CategoryController@save_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryController@update_category_product');

//BrandProduct
Route::get('/add-brand-product','BrandController@add_brand_product');
Route::get('/edit-brand-product/{brand_product_id}','BrandController@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','brandController@delete_brand_product');
Route::get('/all-brand-product','BrandController@all_brand_product');
Route::get('/active-brand-product/{brand_product_id}','BrandController@active_brand_product');
Route::get('/unactive-brand-product/{brand_product_id}','BrandController@unactive_brand_product');
Route::post('/save-brand-product','BrandController@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}','BrandController@update_brand_product');
