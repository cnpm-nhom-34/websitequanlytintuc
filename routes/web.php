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
Route::get('/', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('/blog', 'HomeController@blog');
Route::get('/chi-tiet-bai-viet/{id}', 'HomeController@index');
Route::get('/about', function () {
    return view('about');
});
    
Route::get('/project', function () {
    return view('project');
});
Route::get('/chi-tiet-bai-viet/{id}', 'HomeController@chitietbaiviet');

Route::prefix('admin')->group(function () {
    Route::get('them-bai-viet', 'AdminController@thembaiviet');
    Route::post('them-bai-viet', 'AdminController@thembaivietPost');
    Route::get('danh-sach-bai-viet', 'AdminController@danhsachbaiviet');
    Route::get('xoa-bai-viet/{id}', 'AdminController@xoabaiviet');
  
});
Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
