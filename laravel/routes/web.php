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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/manage/index', function () {
    return view('manage/index');
});

Route::get('/picker/list-all', function () {
    return view('picker/list-all');
});

Route::get('/picker/list-fixed', function () {
    return view('picker/list-fixed');
});

Route::get('/picker/oder-details', function () {
    return view('picker/oder-details');
});
// ec

Route::get('/ec/item-list','App\Http\Controllers\EcController@Itemsall');


Route::get('/ec/cart','App\Http\Controllers\EcController@Cartlist');

Route::get('/ec/itemcheck', function () {
    return view('ec/itemcheck');
});


Route::get('/ec/itemstatus', function () {
    return view('ec/itemstatus');
});

Route::get('/ec/tyumon_info','App\Http\Controllers\EcController@Userlist');

