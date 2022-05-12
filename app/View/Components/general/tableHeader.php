<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class tableHeader extends Component
{
    public $value;
    public $livewire;
    public $sort;
    public $direction;

    public function __construct($value, $livewire="", $sort="no", $direction = "")
    {
        $this->value = $value;
        $this->livewire = $livewire;
        $this->sort = $sort;
        $this->direction = $direction;
    }

    public function render()
    {
        return view('components.general.table-header');
    }
}
