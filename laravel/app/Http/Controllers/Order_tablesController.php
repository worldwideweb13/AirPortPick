<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_table;
use App\Models\Picker;
use Validator;

class Order_tablesController extends Controller
{
    //データ取得処理
    public function OrderList(){
        $orders = Order_table::orderBy('onum','asc')->get();
        $pickers = Picker::orderBy('pid','asc')->get();        
        return view('manage/index',[
            'orders' => $orders,
            'pickers'=> $pickers
        ]);    
    }
}
