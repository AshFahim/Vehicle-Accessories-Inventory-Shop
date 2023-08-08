<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FilterProduct extends Component
{
    public $brands;
    public $collections;
    public $filterTypes;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->brands = $data['brands'];
        $this->collections = $data['collections'];
        $this->filterTypes = $data['filterTypes'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.filter-product');
    }
}
