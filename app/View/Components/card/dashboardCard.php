<?php

namespace App\View\Components\card;

use Illuminate\View\Component;

class dashboardCard extends Component
{
    public $title;
    public $total;
    public $percentage;
    public $route;

    public function __construct($title, $total,$route,$percentage)
    {
        $this->title = $title;
        $this->total = $total;
        $this->route = $route;
        $this->percentage = $percentage;
    }
    
    public function render()
    {
        return view('components.card.dashboard-card');
    }
}
