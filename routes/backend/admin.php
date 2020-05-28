<?php
Route::get('/','b_adminController@getPageAdmin')->name('admin');

Route::resource('post', 'b_postController');