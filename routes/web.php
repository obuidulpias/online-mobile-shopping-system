<?php

Route::get('/',[
  'uses'  => 'MobileShopController@index',
  'as'    => '/'
]);

Route::get('/category-product/{id}',[
  'uses'  => 'MobileShopController@categoryProduct',
  'as'    => 'category-product'
]);
Route::get('/product-details/{id}',[
  'uses' => 'MobileShopController@productDetails',
  'as'   => 'product-details'
]);

Route::get('/contact',[
  'uses' => 'MobileShopController@contact',
  'as'   => 'contact'
]);


//Category info
Route::get('/category/add', [
  'uses' => 'CategoryController@index',
  'as' => 'add-category'
]);
Route::post('/category/save', [
  'uses' => 'CategoryController@saveCategoryInfo',
  'as' => 'new-category'
]);
Route::get('/category/manage', [
  'uses' => 'CategoryController@manageCategoryInfo',
  'as' => 'manage-category'
]);
Route::get('/category/unpublished-category/{id}', [
  'uses' => 'CategoryController@unpublishedCategoryInfo',
  'as' => 'unpublished-category'
]);
Route::get('/category/published-category/{id}', [
  'uses' => 'CategoryController@publishedCategoryInfo',
  'as' => 'published-category'
]);
Route::get('/category/edit/{id}', [
  'uses' => 'CategoryController@editCategoryInfo',
  'as' => 'edit-category'
]);
Route::post('/category/update', [
  'uses' => 'CategoryController@updateCategoryInfo',
  'as' => 'update-category'
]);
Route::get('/category/delete/{id}', [
  'uses' => 'CategoryController@deleteCategoryInfo',
  'as' => 'delete-category'
]);

//brand info
Route::get('/brand/add',[
  'uses' => 'BrandController@index',
  'as'   => 'add-brand'
]);
Route::post('/brand/save',[
  'uses' => 'BrandController@saveBrandInfo',
  'as'   => 'new-brand'
]);
Route::get('/brand/manage',[
  'uses' => 'BrandController@manageBrandInfo',
  'as'   => 'manage-brand'
]);
Route::get('/brand/unpublished/{id}',[
  'uses' => 'BrandController@unpublishedBrandInfo',
  'as'   => 'unpublished-brand'
]);
Route::get('/brand/published/{id}',[
  'uses' => 'BrandController@publishedBrandInfo',
  'as'   => 'published-brand'
]);
Route::get('/brand/edit/{id}',[
  'uses' => 'BrandController@editBrandInfo',
  'as'   => 'edit-brand'
]);
Route::post('/brand/update',[
  'uses' => 'BrandController@updateBrandInfo',
  'as'   => 'update-brand'
]);
Route::get('/brand/delete/{id}',[
  'uses' => 'BrandController@deleteBrandInfo',
  'as'   => 'delete-brand'
]);

//Product Info
Route::get('/product/add',[
  'uses' => 'ProductController@index',
  'as'   => 'add-product'
]);
Route::post('/product/save',[
  'uses' => 'ProductController@saveProductInfo',
  'as'   => 'new-product'
]);
Route::get('/product/manage',[
  'uses' => 'ProductController@manageProductInfo',
  'as'   => 'manage-product'
]);





Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');
