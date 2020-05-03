<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $value;
    public $name;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value, $name, $label)
    {
        $this->value = $value;
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.checkbox');
    }
}
