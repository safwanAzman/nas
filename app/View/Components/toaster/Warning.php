<?php

namespace App\View\Components\toaster;

use Illuminate\View\Component;

class Warning extends Component
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
    
    public function render()
    {
        return view('components.toaster.warning');
    }
}
