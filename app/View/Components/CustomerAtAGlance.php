<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CustomerAtAGlance extends Component
{
    public $totalOrderCost;
    public $orderCount;
    public $cart;
    public $wishlist;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($totalOrderCost, $orderCount, $cart, $wishlist)
    {
        $this->totalOrderCost = $totalOrderCost;
        $this->orderCount = $orderCount;
        $this->cart = $cart;
        $this->wishlist = $wishlist;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.customer-at-a-glance');
    }
}
