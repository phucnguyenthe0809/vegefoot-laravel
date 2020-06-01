<?php
Route::get('/','b_adminController@getPageAdmin')->name('admin');

Route::resource('post', 'b_postController')->except(['show'])->parameters(['post' => 'id']);


Route::resource('category', 'b_categoryController')->except(['show','create'])->parameters(['category' => 'id']);
 