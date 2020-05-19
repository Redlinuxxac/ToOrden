<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    /**
     * crate new variable
     * 
     * @return $lugar
     */
    public $lugar;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $accion;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $label;

    public function __construct(string $lugar = null, string $accion = null,string $label= null)
    {
        $this->lugar  = $lugar;
        $this->accion = $accion;
        $this->label  = $label;
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
