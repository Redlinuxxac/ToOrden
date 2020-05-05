<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    /**
     * crate new variable
     * 
     * @return $opcion
     */
    public $opcion;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct(string $opcion = null)
    {
        $this->opcion = $opcion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumbs');
    }
}
