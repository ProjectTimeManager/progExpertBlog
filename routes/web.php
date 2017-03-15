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

Route::get('/Admin', function () {
	Session::put('page','Dashboard');
    return view('blank');
});

Route::get('/Admin/blog', function () {
	Session::put('page','Blog');
    return view('admin.Blog.indexBlog');
});

Route::get('/Admin/blog/addNew', function () {
	Session::put('page','Add New Blog');
    return view('admin.Blog.addBlog');
});
