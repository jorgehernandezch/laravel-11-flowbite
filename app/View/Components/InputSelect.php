<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputSelect extends Component
{
    public function __construct(
        public ?string $id,
        public array $options,
        public ?string $selected = null,
        public string $name,
        public string $label,
        public string $styles = 'w-1/3',
        public ?string $icon = null,
        public bool $required = false,
        public ?string $onChange = null
    ) {}

    public function render()
    {
        return view('components.input-select');
    }
}
