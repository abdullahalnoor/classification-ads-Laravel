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

/* Front Part */

Route::get('/','WelcomeController@index');
Route::get('/product/product-category/{id}','WelcomeController@showProductCategory');
Route::get('/product/product-item','WelcomeController@showProductItem');
Route::get('/product/product-details/{id}','WelcomeController@showProductDetails');
Route::get('/signin/signin-form','WelcomeController@showSignInForm');
Route::get('/signup/signup-form','WelcomeController@showSignUpInForm');
Route::get('/contact-us-form','WelcomeController@showContactUsForm');
Route::get('/post-ads-form','WelcomeController@showPostAdsUsForm');
Route::post('/new-user','WelcomeController@saveUserInfo');
Route::get('/signout','WelcomeController@customerLogout');
Route::post('/customer-signin','WelcomeController@customerSignIn');
Route::get('/welcome-view','WelcomeController@newRegistration');


/* Admin Part */


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*- Category -*/
Route::get('/category/add-category','CategoryController@showAddCategoryForm');
Route::post('/category/new-category','CategoryController@saveCategoryInfo');
Route::get('/category/manage-category','CategoryController@showCategoryManageTable');

/*Brand*/
Route::get('/brand/add-brand','BrandController@showAddBrandForm');
Route::post('/brand/new-brand','BrandController@saveBrandInfo');
Route::get('/brand/manage-brand','BrandController@showBrandManageTable');

/*product*/
Route::get('/product/add-product','ProductController@showAddProductForm');
Route::post('/product/new-product','ProductController@saveProductInfo');
Route::get('/product/manage-product','ProductController@showProductManageTable');
Route::get('/product/unpublished-product/{id}','ProductController@unpublishedProductInfo');
Route::get('/product/published-product/{id}','ProductController@publishedProductInfo');
Route::get('/product/delete-product/{id}','ProductController@deleteProductInfo');
Route::get('/product/edit-product/{id}','ProductController@editProductInfo');
Route::post('/product/update-product','ProductController@updateProductInfo');