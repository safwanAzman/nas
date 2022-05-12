<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $value;
    public $type;

    public function __construct($label, $value, $type = "text")
    {
        $this->label    = $label;
        $this->value    = $value;
        $this->type     = $type;
    }
    public function render()
    {
        return view('components.form.input');
    }
}
