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

Route::get('/', function () {
    return view('index');
})->name('primaryIndex');

Route::get('/listView', function () {
    return view('indexListView');
})->name('indexListView');

Auth::routes();

Route::group(['middleware' => 'auth'],function(){

Route::get('/home','indexController@index')->name('index');
Route::get('/adminDashboard','indexController@adminDashboard')->name('adminDashboard');
Route::get('/addBlogPost','blogPostController@addBlogPost')->name('addBlogPost');
Route::post('/saveBlogPost','blogPostController@saveBlogPost')->name('saveBlogPost');
Route::get('/blogPostList','blogPostController@blogPostList')->name('blogPostList');


});

// without authentication checking
Route::get('/allBlogList','blogPostController@allBlogList')->name('allBlogList');
Route::get('/singleBlog/{id}','blogPostController@singleBlog')->name('singleBlog');

