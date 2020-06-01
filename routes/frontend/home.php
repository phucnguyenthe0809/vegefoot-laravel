<?php
Route::get('/', 'f_homeController@getIndex')->name('index');
Route::get('/gioi-thieu', 'f_homeController@getAbout')->name('about');
Route::get('/lien-he', 'f_homeController@getContact')->name('contact');

// product
Route::get('/san-pham', 'f_productController@getProductList')->name('productList');
Route::get('/chi-tiet', 'f_productController@getProductDetail')->name('productDetail');
Route::get('/yeu-thich', 'f_productController@getWithList')->name('withList');

// cart
Route::get('/gio-hang', 'f_cartController@getCartDetail')->name('cart');

// checout
Route::get('/thanh-toan', 'f_checkOutController@getCheckout')->name('checout');


// post
Route::get('/bai-viet', 'f_postController@getPostList')->name('postList');
Route::get('/chi-tiet-bai-viet', 'f_postController@getPostDetail')->name('postDetail');


