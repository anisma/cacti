<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Banner extends Component
{
    public $id;
    public $image;
    public $title;
    public $index;
    public $total;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $image, $title, $index, $total)
    {
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
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
        return view('components.banner');
    }
}
