<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class tableBody extends Component
{
    public $colspan;
    public $sort;

    public function __construct($colspan, $sort="")
    {
        $this->colspan = $colspan;
        $this->sort = $sort;
    }

    public function render()
    {
        return view('components.general.table-body');
    }
}
