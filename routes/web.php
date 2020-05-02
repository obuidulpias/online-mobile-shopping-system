<?php

Route::get('/',[
  'uses'  => 'MobileShopController@index',
  'as'    => '/'
]);

Route::get('/category-product',[
  'uses'  => 'MobileShopController@categoryProduct',
  'as'    => 'category-product'
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



Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');
