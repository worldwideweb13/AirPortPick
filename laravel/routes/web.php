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


//manageのルート記述
Route::get('/manage/index', 'Order_tablesController@OrderList' );

// pickerのルート記述
Route::get('/picker/list-all', 'PickerController@listall');

Route::get('/picker/list-fixed', 'PickerController@listfixed');

Route::get('/picker/order-details/{onum}', 'PickerController@orderdetails')->name('order-details');


// ecのルート記述
Route::get('/ec/item-list','EcController@Itemsall');

// Route::get('cart/{iid}','EcController@Cartlist')->name('cart');
Route::get('/ec/cart','EcController@Cartlist');

Route::get('itemcheck/{iid}', 'EcController@accept')->name('itemcheck');





Route::get('/ec/itemstatus', function () {
    return view('ec/itemstatus');
});

Route::get('/ec/tyumon_info','EcController@Userlist');
