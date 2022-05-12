<?php

namespace App\View\Components\toaster;

use Illuminate\View\Component;

class Error extends Component
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
    
    public function render()
    {
        return view('components.toaster.error');
    }
}
