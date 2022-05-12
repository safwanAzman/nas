<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $tbody_scroll;
    
    public function __construct($tbody_scroll = '')
    {
        $this->tbody_scroll = $tbody_scroll;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.general.table');
    }
}
