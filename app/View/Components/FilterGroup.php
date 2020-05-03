<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FilterGroup extends Component
{
    public $items;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items, $title)
    {
        $this->items = $items;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.filter-group');
    }
}
