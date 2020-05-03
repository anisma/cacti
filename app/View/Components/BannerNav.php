<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BannerNav extends Component
{
    public $index;
    public $total;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($index, $total)
    {
        $this->index = $index;
        $this->total = $total;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.banner-nav');
    }
}
