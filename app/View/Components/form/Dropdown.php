<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public $label;
    public $value;
    public $default;

    public function __construct($label, $value, $default)
    {
        $this->label = $label;
        $this->value = $value;
        $this->default = $default;
    }
    public function render()
    {
        return view('components.form.dropdown');
    }
}
