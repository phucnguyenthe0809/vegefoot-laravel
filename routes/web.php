<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['namespace' => 'frontend', 'as' => 'frontend.'], function () {
    foreach (glob(__DIR__.'/frontend/*.php') as $filename)
    {
        include $filename;
    }
});


Route::group(['prefix'=>'admin','namespace' => 'backend', 'as' => 'backend.'], function () {
    foreach (glob(__DIR__.'/backend/*.php') as $filename)
    {
        include $filename;
    }
});
// Route::get('/',);

// Route::get('topic/{slugTopic}/posts', function ($id) {
    
// });

// Route::get('post/{slugPost}.html', function ($id) {
    
// });


