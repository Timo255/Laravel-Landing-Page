<?php

namespace App\Livewire;

use Livewire\Component;

class TestimonialLivewire extends Component
{
    // public $openPopUp = false;

    public $testimonials = [
       [
        'img' => 'images/user1.png',
        'star' => 'images/star.png',
        'name' => 'Lorem ipsum',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo optio quos totam enim ducimus dicta explicabo error,  obcaecati, necessitatibus accusantium aut corrupti delectus minus aliquid vel?',
       ], 
       [
        'img' => 'images/user2.png',
        'star' => 'images/star.png',
        'name' => 'Lorem ipsum',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo optio quos totam enim ducimus dicta explicabo error,  obcaecati, necessitatibus accusantium aut corrupti delectus minus aliquid vel?',
       ], 
       [
        'img' => 'images/user1.png',
        'star' => 'images/star.png',
        'name' => 'Lorem ipsum',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo optio quos totam enim ducimus dicta explicabo error,  obcaecati, necessitatibus accusantium aut corrupti delectus minus aliquid vel?',
       ], 
    ];


    public function setPopUp($openPop)
    {
        $this->dispatch('openPopup',$openPop);
    }

    public function render()
    {
        return view('livewire.testimonial-livewire');
    }
}
