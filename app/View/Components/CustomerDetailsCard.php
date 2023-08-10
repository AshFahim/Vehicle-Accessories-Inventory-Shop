<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CustomerDetailsCard extends Component
{
    public $name;
    public $pastOrderCount;
    public $email;
    public $shippingAddress;
    public $billingAddress;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->pastOrderCount = $data['pastOrderCount'];
        $this->email = $data['email'];
        $this->shippingAddress = $data['shippingAddress'];
        $this->billingAddress = $data['billingAddress'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.customer-details-card');
    }
}
