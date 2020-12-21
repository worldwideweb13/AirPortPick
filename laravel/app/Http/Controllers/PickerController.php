<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_table;
use App\Models\Cart;
use App\Models\Item;

class PickerController extends Controller

{
    public function listall(){
        $order_tables = Order_table::where('comp', '0')->orderBy('otime', 'asc')->get();
        return view('picker/list-all', [
        'order_tables' => $order_tables
    ]);
    }


    public function listfixed(){
        $order_tables = Order_table::where('comp', '1')->orderBy('otime', 'asc')->get();
        return view('picker/list-fixed', [
        'order_tables' => $order_tables
    ]);
    }

    public function orderdetails($unum){

        return view('picker/order-details', [
        'unum'=>$unum]);
    }




}
