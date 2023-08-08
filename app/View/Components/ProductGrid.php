<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductGrid extends Component
{
    public $bmuk_no;
    public $product_image;
    public $product_name;
    public $product_desc;
    public $product_price;
    public $product_fav;
    public $product_rating;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->bmuk_no = $data['bmuk_no'];
        $this->product_image = $data['image'];
        $this->product_name = $data['collection'] . '-' . $data['filter_type'];
        $this->product_desc = $data['car_brand'] . ', ' . $data['model'];
        $this->product_price = $data['price'];
        $this->product_fav = (bool)random_int(0, 1);
        $this->product_rating = rand(1, 5);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-grid');
    }
}
