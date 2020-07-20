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

//cart
Route::post('/cart/add',[
  'uses' => 'CartController@addToCart',
  'as'   => 'add-to-cart'
]);
Route::get('/cart/show',[
  'uses' => 'CartController@showCart',
  'as'   => 'show-cart'
]);
Route::get('/cart/delete/{id}',[
  'uses' => 'CartController@deleteCart',
  'as'   => 'delete-cart-item'
]);
Route::post('/cart/update',[
  'uses' => 'CartController@updateCart',
  'as'   => 'update-cart'
]);

Route::get('/checkout',[
  'uses' => 'CheckoutController@index',
  'as'   => 'checkout'
]);
Route::post('/checkout/registration',[
  'uses' => 'CheckoutController@customerSignUp',
  'as'   => 'customer-sign-up'
]);
Route::post('/checkout/customer-login',[
    'uses' => 'CheckoutController@customerLoginCheck',
    'as'   => 'customer-login'
]);

//header login logout
Route::post('/checkout/customer-logout',[
    'uses' => 'CheckoutController@customerLogout',
    'as'   => 'customer-logout'
]);
Route::post('/checkout/new-customer-login',[
    'uses' => 'CheckoutController@newCustomerLogin',
    'as'   => 'new-customer-login'
]);


Route::get('/checkout/shipping',[
    'uses' => 'CheckoutController@shippingForm',
    'as'   => 'checkout-shipping'
]);
Route::post('/checkout/save',[
    'uses' => 'CheckoutController@saveShippingInfo',
    'as'   => 'new-shipping'
]);
Route::get('/checkout/payment',[
    'uses' => 'CheckoutController@paymentForm',
    'as'   => 'checkout-payment'
]);
Route::post('/checkout/order',[
    'uses' => 'CheckoutController@newOrder',
    'as'   => 'new-order'
]);
Route::get('/complete/order',[
    'uses' => 'CheckoutController@completeOrder',
    'as'   => 'complete-order'
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
Route::get('/product/edit/{id}',[
  'uses' => 'ProductController@editProductInfo',
  'as'   => 'edit-product'
]);
Route::post('/product/update',[
  'uses' => 'ProductController@updateProductInfo',
  'as'   => 'update-product'
]);
Route::get('/product/unpublished/{id}',[
  'uses' => 'ProductController@unpublishedProductInfo',
  'as'   => 'unpublished-product'
]);
Route::get('/brand/published/{id}',[
  'uses' => 'ProductController@publishedProductInfo',
  'as'   => 'published-product'
]);
Route::get('/product/delete/{id}',[
  'uses' => 'ProductController@deleteProductInfo',
  'as'   => 'delete-product'
]);






Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');
