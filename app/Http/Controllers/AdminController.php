<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Voucher;
use App\Models\UsedVoucher;

class AdminController extends Controller
{
    public function DashboardGet(){

        $vouchers = Voucher::all(); //reverse();
        
        foreach($vouchers as $voucher){
            $due[$voucher['name']] = $voucher['amount'] - UsedVoucher::where('voucher_id', $voucher['id'])->sum('amount');
        }

        // return $vouchers;

        return view('admin.dashboard')->with('vouchers', $vouchers)
                                        ->with('due', $due);
    }

    public function AddPromo(Request $req){
        $voucher = new Voucher();
        $voucher->name = $req->codename;
        $voucher->amount = $req->amount;
        $voucher->parcent = $req->parcent;
        $voucher->save();

        return redirect()->route('admin.dashboard');
    }

    public function CodeStatusChange($id){

        $voucher = Voucher::where('id', $id)->first();
        $voucher->status = !$voucher->status;
        $voucher->save();

        return redirect()->route('admin.dashboard');
    }
}
