<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductGridSlider extends Component
{
    public $sliderNo;
    public $products;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sliderNo, $data)
    {
        $this->products = $data;
        $this->sliderNo = $sliderNo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-grid-slider');
    }
}
