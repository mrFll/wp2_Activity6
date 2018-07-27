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


// ************************** customer routes **************************

// main page - show all products or by their category
Route::get('/', 'CustomerController@productsMainPage');
// TODO handle first page by the category

// show one product detail
Route::get('/product', 'CustomerController@productDetail');


// ************************** manager routes **************************
// show all of products
Route::get('/manager', 'ManagerController@mainManagerPage');

// add new
Route::get('/manager/addProduct', 'ManagerController@addNewProductView');
Route::post('/manager/addProduct', 'ManagerController@addNewProductHandler');

// delete
Route::get('/manager/delete-product', 'ManagerController@deleteProduct'); // TODO handle the request and View
Route::post('/manager/delete-product', 'ManagerController@deleteProductHandler');

// edit products page
Route::get('/manager/edit-product', 'ManagerController@editProduct');
Route::post('/manager/edit-product', 'ManagerController@editProductHandler');

// companies page view - edit with AJAX
Route::get('/manager/companies', 'ManagerController@companies');
Route::post('/manager/companies', 'ManagerController@companies'); // TODO

// categories page view - edit with AJAX
Route::get('/manager/categories', 'ManagerController@categories');
Route::post('/manager/categories', 'ManagerController@categories'); // TODO

// site data view and edit handler
Route::get('/manager/site-date', 'ManagerController@siteData');
Route::post('/manager/site-data', 'ManagerController@siteDataHandler');


