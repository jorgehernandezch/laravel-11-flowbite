<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputDate extends Component
{
    public $name;
    public $label;
    public $value;
    public $errors;
    public $styles;
    public $required;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $value = null, $errors, $styles = '', $required = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->errors = $errors;
        $this->styles = $styles;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input-date');
    }
}
