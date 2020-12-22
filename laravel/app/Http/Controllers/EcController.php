<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order_table;




class EcController extends Controller
{
    //
    public function Itemsall(){
       $items =  Item::all();
       return view('ec.item-list',['items' => $items]);
    }

    public function Cartlist(){
       $cart_item = Item::all();
        return view('ec.cart',['cart_item' => $cart_item]);
     }

     public function Userlist(){
        $oder_info = Order_table::all();
        $users = User::all();
        return view('ec.tyumon_info',['oder_info' => $oder_info],['users' => $users]);
     }

     public function accept($iid) {
     
      $item = Item::where('iid' ,$iid)->first();
      return view('ec.itemcheck' , ['item' => $item]);

    }

     
}
