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
        $orderArray = array();
        foreach($orders as $order){
            if($order["place"]=="空港"){
                $delidate = $order["portdate"];
                $order["delidate"] = $delidate;
                array_push($orderArray,$order);
            } else {
                array_push($orderArray,$order);
            }
        }
        return view('manage/index',[
            'orderArray' => $orderArray,
            'pickers'=> $pickers
        ]);    
    }
}
