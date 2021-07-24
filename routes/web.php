<?php

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

Route::get('/','ClientController@index');

Route::get('/about','ClientController@about');

Route::get('/view_team/{id}','ClientController@view_team');

Route::get('/service','ClientController@service');

Route::get('/serviceDetail/{id}','ClientController@serviceDetail');

Route::get('/blog','ClientController@blog');

Route::get('/blogDetail/{id}','ClientController@blogDetail');

Route::get('/contact','ClientController@contact');
Route::post('/create_contact','ClientController@create_contact');

Route::get('login','Auth\LoginController@loginForm');
Route::post('login','Auth\LoginController@login')->name('login');

Route::get('/home', 'HomeController@index')->name('home');
//-----------------------Admin Dashboarc-----------------------------
//Route::get('/admin','Controller@show_admin_dashboard');


// Route::group(['middleware'=>['auth']],function(){
    Route::get('logout','Auth\LoginController@logout');

// Blog
    Route::get('/admin/',function(){
        return view('site_admin.dashboard')->with(['url'=>'dashboard']);
    });

    Route::get('/admin/blog','BlogController@show_blog');
    Route::get('/admin/view_blog','BlogController@view_blog');
    Route::post('/admin/blog/insert','BlogController@create_or_edit_admin_blog');
    Route::get('/edit/blog/{id}','BlogController@edit_blog');
    Route::post('/admin/update_blog','BlogController@update_blog');
    Route::delete('/delete/blog/{id}','BlogController@delete_blog');

// Service
    Route::get('/admin/service','BlogController@service');
    Route::get('/admin/view_service','BlogController@view_service');
    Route::post('/admin/service/insert','BlogController@create_service');
    Route::get('/edit/service/{id}','BlogController@edit_service');
    Route::post('/admin/update_service','BlogController@update_service');
    Route::delete('delete/service/{id}','BlogController@delete_service');

//Contact
    Route::get('/admin/contact','BlogController@contact');
    Route::get('/admin/view_contact','BlogController@view_contact');
    Route::delete('/delete/contact/{id}','BlogController@delete_contact');

//Team
    Route::get('/admin/team','BlogController@team');
    Route::get('/admin/view_team','BlogController@view_team');
    Route::post('/admin/team/insert','BlogController@create_team');
    Route::get('edit/team/{id}','BlogController@edit_team');
    Route::post('/admin/update_team','BlogController@update_team');
    Route::delete('delete/team/{id}','BlogController@delete_team');

//Office
    Route::get('/admin/office','BlogController@office');
    Route::post('/admin/update_office','BlogController@update_office');

//Client
    Route::get('/admin/client','BlogController@client');
    Route::get('/admin/view_client','BlogController@view_client');
    Route::post('/admin/client/insert','BlogController@create_client');
    Route::get('/edit/client/{id}','BlogController@edit_client');
    Route::post('/admin/update_client','BlogController@update_client');
    Route::delete('/delete/client/{id}','BlogController@delete_client');
    
//  });

//in registerController
// use Illuminate\Support\Facades\Hash;
// Route::get('test',function(){
//     echo Hash::make("11111111");
// });

// $pass = Hash::make('11111111');
// User::create([
//     'name' => 'moonlay',
//     'email' => 'moonlay@gmail.com',
//     'pass' => $pass
// ]);