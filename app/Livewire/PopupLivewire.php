<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class PopupLivewire extends Component
{
    public $openPopUp = false;
    public $buttonText = 'Subscribe';

    
    public function setOpenPopUp($openPop)
    {
        $this->openPopUp = $openPop;
    }

    public function render()
    {
        return view('livewire.popup-livewire');
    }
}
