<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Voucher;
use App\Models\UsedVoucher;

class Cart extends Component
{
    public $item1, $item2, $item3, $total, $discount, $disparcent, $voucher, $message, $user;
    

    public function __construct($voucher)
    {
        $this->item1 = 47;
        $this->item2 = 50;
        $this->item3 = 32;

        $this->total = $this->item1 + $this->item2 + $this->item3;
        
        $v = Voucher::where('name', $voucher)->first();
        
        $this->user = session()->get('user');
        
        if($v){
            $this->voucher = $v;

            if($this->user->type !== 'Premium'){
                $uv = UsedVoucher::where('user_id', $this->user->id)->first();
                if($uv){
                    $this->message = "You have used this voucher";
                    return;
                }
            }

            if((UsedVoucher::where('voucher_id', $this->voucher->id)->sum('amount') + ($v->parcent / 100) * $this->total)>$this->voucher->amount){
                $this->message = "Voucher limit exceeded";
                return;
            }

            $this->disparcent = $v->parcent;
            $this->discount = ($v->parcent / 100) * $this->total;
        }
        elseif($voucher != '') $this->message = "The voucher is not existed";

    }


    public function render()
    {
        return view('components.cart');
    }
}
