<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CrudIndex extends Component
{
    public $model = 'Modelo';
    public $text = 'Text';
    public $route = 'app.index';
    public $create;
    public $dashboard;
    public $return;

    /**
     * Create a new component instance.
     */
    public function __construct($model, $text, $route = null, $create = null, $dashboard = null, $return = null)
    {
        $this->model = $model;
        $this->text = $text;
        $this->route = $route;
        $this->create = $create;
        $this->dashboard = $dashboard;
        $this->return = $return;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.crud.index');
    }
}
