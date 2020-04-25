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
