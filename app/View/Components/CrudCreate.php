<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CrudCreate extends Component
{
    public $title = 'title';
    public $return;
    public function __construct($title, $return = false)
    {
        $this->title = $title;
        $this->return = $return;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.crud.create');
    }
}
