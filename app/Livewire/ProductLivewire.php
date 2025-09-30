<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Subscriber as SubscribeUser;

class ProductLivewire extends Component
{
    public $BigWatch = '/images/big watch.png';
    public $mediumWatch = '/images/mediam watch.png';
    public $smallWatch = '/images/small watch.png';
    public $openPopUp = false;
    public $first_name;
    public $last_name;
    public $email;
    public $success;
    // public $loading = false;
    // public $buttonText = "Subscribe";
    // 'success' => 'Thank you for subscribing check your email inbox or spam'

   
    // public function mount()
    // {
    //     $this->buttonText = 'Subscribe';
    //     $this->first_name = '';
    //     $this->last_name = '';
    //     $this->email = '';
    //     $this->success = '';
    // }

    public function setOpenPopUp($openPop)
    {
        $this->openPopUp = $openPop;
    }

    #[On('openPopup')]
    public function openPopupFromEvent($value = true)
    {
        $this->setOpenPopUp($value);
    }

     public function subscribe()
    {
        $validated = $this->validate([
            'first_name' => "required|string|min:3",   
            'last_name' => "required|string",   
            'email' => "required|string|email",   
        ]);

        // Send welcome email
        $userInfo = [
            'first_name' => $this->first_name,
            'subject' => 'Welcome Email Automation',
        ];

        Notification::route('mail', $this->email)->notify(new SubscribeUser($userInfo));

        // Save to database
        Subscriber::create($validated);

        // Show success
        $this->success = 'Thanks for subscribing to us!';

        // Reset form and button
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.product-livewire');
    }
}
