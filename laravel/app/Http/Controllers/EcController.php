<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\User;



class EcController extends Controller
{
    //
    public function Itemsall(){
       $items =  Item::all();
       return view('ec.item-list',['items' => $items]);
    }

    public function Cartlist(){
        $carts =  Cart::all();
        return view('ec.cart',['cart' => $carts]);
     }

     public function Userlist(){
        $users =  User::all();
        return view('ec.tyumon_info',['user' => $users]);
     }
}
