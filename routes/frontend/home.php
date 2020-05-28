<?php
Route::get('/', 'f_homeController@getIndex');
Route::get('/gioi-thieu', 'f_homeController@getAbout');
Route::get('/lien-he', 'f_homeController@getContact');

// product
Route::get('/san-pham', 'f_productController@getProductList');
Route::get('/chi-tiet', 'f_productController@getProductDetail');
Route::get('/yeu-thich', 'f_productController@getWithList');

// post

Route::get('/bai-viet', 'f_postController@getPostList');
Route::get('/chi-tiet-bai-viet', 'f_postController@getPostDetail');

// cart
Route::get('/gio-hang', 'f_cartController@getCartDetail');

// checout
Route::get('/thanh-toan', 'f_checkOutController@getCheckout');

