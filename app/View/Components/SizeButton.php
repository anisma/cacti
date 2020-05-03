<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SizeButton extends Component
{

    public $options;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($options)
    {
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.size-button');
    }
}
