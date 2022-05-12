<?php

namespace App\View\Components\tab;

use Illuminate\View\Component;

class NavContent extends Component
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function render()
    {
        return view('components.tab.nav-content');
    }
}
