<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Address extends Component
{
    public $label;
    public $value1;
    public $value2;
    public $value3;
    public $value4;
    public $value5;
    public $condition;
    public $state;

    public function __construct($label, $value1, $value2, $value3, $value4, $value5, $condition)
    {
        $this->label = $label;
        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->value3 = $value3;
        $this->value4 = $value4;
        $this->value5 = $value5;
        $this->condition = $condition;
        // $this->state = State::all();
    }
    public function render()
    {
        return view('components.form.address');
    }
}
