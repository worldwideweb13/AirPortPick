<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_table;

class PickerController extends Controller

{
    public function listall(){
        $order_tables = Order_table::orderBy('otime', 'asc')->get();
        return view('picker/list-all', [
        'order_tables' => $order_tables
    ]);
    }




}
