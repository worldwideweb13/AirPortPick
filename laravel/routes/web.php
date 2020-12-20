<?php

use Illuminate\Support\Facades\Route;
use App\Models\Order_table;

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
Route::get('/manage/index', function () {
    return view('manage/index');
});


// pickerのルート記述
Route::get('/picker/list-all', 'PickerController@listall');　//リスト一覧表示

//コントローラー移行前の記述
// Route::get('/picker/list-all', function () {
//     $order_tables = Order_table::orderBy('otime', 'asc')->get();
//     return view('picker/list-all', [
//         'order_tables' => $order_tables
//     ]);
// });

Route::get('/picker/list-fixed', function () {
    return view('picker/list-fixed');
});

Route::get('/picker/oder-details', function () {
    return view('picker/oder-details');
});



// ecのルート記述
Route::get('/ec/item-list', function () {
    return view('ec/item-list');
});

Route::get('/ec/cart', function () {
    return view('ec/cart');
});

Route::get('/ec/itemcheck', function () {
    return view('ec/itemcheck');
});


Route::get('/ec/itemstatus', function () {
    return view('ec/itemstatus');
});

Route::get('/ec/tyumon_info', function () {
    return view('ec/tyumon_info');
});
