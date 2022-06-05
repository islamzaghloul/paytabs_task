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
Route::get('/', 'CategoryController@index');
Route::get('ajax', 'CategoryController@getdata');
// Route::get('/cat', function () {
//     $category = new \App\Models\category();
//     $category->id_off = 16;
//     $category->category_name='sub-sub-sub-sub-7 A1';
//     $category->save();
    
// });
