<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Field extends Component
{
    public $option;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $option = null)
    {
        $this->option = $option;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.field');
    }
}
