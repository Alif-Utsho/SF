<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function CartGet(){
        return view('cart.cart')->with('discount', 0);
    }

    public function Redeem(Request $req){
        // return view('cart.cart')->with('discount', 10);
        return view('cart.cart')->with('discount', 100);
    }
}
