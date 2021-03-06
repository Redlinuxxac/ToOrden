<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListaStudents extends Component
{
    public $students;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($students)
    {
        $this->$students = $students;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.lista-students');
    }
}
