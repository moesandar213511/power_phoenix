<?php

use Illuminate\Http\Request;

// Route::post('api/login', 'Auth\LoginController@login');
Route::group(['middleware'=>'auth:api'],function(){
    
});

Route::post('create/blog', 'BlogController@apiCreateBlog');
Route::get('blog/data', 'BlogController@apiShowBlogData');
Route::get('edit/blog/{id}', 'BlogController@apiEditBlog');
Route::post('update/blog/{id}', 'BlogController@apiUpdateBlog');
Route::delete('delete/blog/{id}', 'BlogController@apiDeleteBlog');

Route::group([


    'prefix' => 'auth'

], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('payload','AuthController@payload');
});

