<?php

namespace App\Livewire;

use Livewire\Component;

class FeatureLivewire extends Component
{
    public $features = [
       [
        'img' => '/images/feature 1.png',
        'nameH1' => 'High Quality',
        'txt1' => 'Lorem ipsum dolor',
        'txt2' => 'Lorem ipsum dolor',
       ], 
       [
        'img' => '/images/feature 2.png',
        'nameH1' => 'Awesome Design',
        'txt1' => 'Lorem ipsum dolor',
        'txt2' => 'Lorem ipsum dolor',
       ], 
       [
        'img' => '/images/feature 3.png',
        'nameH1' => 'Latest Technology',
        'txt1' => 'Lorem ipsum dolor',
        'txt2' => 'Lorem ipsum dolor',
       ], 
       [
        'img' => '/images/feature 4.png',
        'nameH1' => 'User Friendly',
        'txt1' => 'Lorem ipsum dolor',
        'txt2' => 'Lorem ipsum dolor',
       ], 
    ];


    public function render()
    {
        return view('livewire.feature-livewire');
    }
}
