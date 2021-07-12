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


/**
 * frontend
 */
Route::get('/', 'HomeController@index');

Route::get('/trangchu', 'HomeController@index');


/**
 * backtend
 */
Route::get('/admin', 'AdminController@index');
//show_dashboard
Route::get('/dashboard', 'AdminController@show_dashboard');
//logout
Route::get('logout', 'AdminController@logout');
//login
Route::post('/admin-dashboard', 'AdminController@dashboard');


//-----category product--------
//add cate
Route::get('/add-category-product', 'CategoryProduct@add_category_product');
//show all cate
Route::get('/all-category-product', 'CategoryProduct@all_category_product');

Route::get('/edit-category-product/{category_id}', 'CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_id}', 'CategoryProduct@delete_category_product');

Route::get('/unactive-category-product/{category_id}', 'CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_id}', 'CategoryProduct@active_category_product');

Route::post('/save-category-product', 'CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_id}', 'CategoryProduct@update_category_product');



//-----brand product--------
//add cate
Route::get('/add-brand-product', 'BrandProduct@add_brand_product');
//show all cate
Route::get('/all-brand-product', 'BrandProduct@all_brand_product');

Route::get('/edit-brand-product/{brand_id}', 'BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_id}', 'BrandProduct@delete_brand_product');

Route::get('/unactive-brand-product/{brand_id}', 'BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_id}', 'BrandProduct@active_brand_product');

Route::post('/save-brand-product', 'BrandProduct@save_brand_product');
Route::post('/update-brand-product/{brand_id}', 'BrandProduct@update_brand_product');

//----- product--------
//add cate
Route::get('/add-product', 'ProductController@add_product');
//show all cate
Route::get('/all-product', 'ProductController@all_product');

Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');

Route::get('/unactive-product/{product_id}', 'ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'ProductController@active_product');

Route::post('/save-product', 'ProductController@save_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');