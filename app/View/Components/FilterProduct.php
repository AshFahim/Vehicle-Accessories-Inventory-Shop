<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FilterProduct extends Component
{
    public $brands;
    public $collections;
    public $filterTypes;
    public $models;
    public $specifications;
    public $selectedFilter;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->selectedFilter = $data['selectedFilter'];
        $this->brands = $data['filterProductVars']['brands'];
        $this->collections = $data['filterProductVars']['collections'];
        $this->filterTypes = $data['filterProductVars']['filterTypes'];
        if (!empty($data['filterProductVars']['models'])) {
            $this->models = $data['filterProductVars']['models'];
        } else $this->models = array();
        if (isset($data['filterProductVars']['specifications'])) {
            $this->specifications = $data['filterProductVars']['specifications'];
        } else $this->specifications = array();
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
