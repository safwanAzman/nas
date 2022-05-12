<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class Modal extends Component
{
    public $title;
    public $modalActive;
    public $modalSize;
    public $closeBtn;
    
    public function __construct($title,$modalActive,$modalSize ,$closeBtn ="yes")
    {
        $this->title = $title;
        $this->modalActive = $modalActive;
        $this->modalSize = $modalSize;
        $this->closeBtn = $closeBtn;
    }

    
    public function render()
    {
        return view('components.general.modal');
    }
}
