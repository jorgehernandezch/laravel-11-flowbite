<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputTextArea extends Component
{
    public ?string $id;
    public $name;
    public $label;
    public $placeholder;
    public $icon;
    public $errors;
    public $styles;
    public ?bool $required;
    public $value;
    public $onBlur;

    public function __construct(
        string $name,
        string $label,
        string $placeholder,
        $errors,
        ?string $id = null,
        ?string $icon = null,
        string $styles = '',
        ?bool $required = false,
        $value = null,
        string $onBlur = ''
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->icon = $icon;
        $this->errors = $errors;
        $this->styles = $styles;
        $this->required = $required;
        $this->value = $value;
        $this->onBlur = $onBlur;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-text-area');
    }
}
