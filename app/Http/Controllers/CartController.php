<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsedVoucher;

class CartController extends Controller
{
    //
    public function CartGet(){
        return view('cart.cart')->with('voucher', '');
    }

    public function Redeem(Request $req){
        // return view('cart.cart')->with('discount', 10);
        // return $req->voucher;
        return view('cart.cart')->with('voucher', $req->voucher);
    }


    public function Pay(Request $req){
        $uv = new UsedVoucher();
        $uv->user_id = $req->user_id;
        $uv->voucher_id = $req->voucher_id;
        $uv->amount = $req->amount;
        $uv->save();

        return "Order Confirmed! Please wait untill delivery";
    }
}
