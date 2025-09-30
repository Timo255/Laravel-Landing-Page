<?php

namespace App\Livewire;

use Livewire\Component;

class AboutLivewire extends Component
{
    public $BigWatch = '/images/big watch.png';
    public $mediumWatch = '/images/mediam watch.png';
    public $smallWatch = '/images/small watch.png';
    public $checkTick = '/images/Checkbox.png';

    public function render()
    {
        return view('livewire.about-livewire');
    }
}
