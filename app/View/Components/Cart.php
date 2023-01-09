<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Cart extends Component
{
    public $item1, $item2, $item3, $total, $discount, $disparcent;
    

    public function __construct()
    {
        $this->item1 = 47;
        $this->item2 = 50;
        $this->item3 = 32;

        $this->disparcent = 35;

        $this->discount = 0;
        $this->total = $this->item1 + $this->item2 + $this->item3;
    }

    public function render()
    {
        return view('components.cart');
    }
}
