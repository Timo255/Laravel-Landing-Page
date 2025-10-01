<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Subscriber as SubscribeUser;

class ProductLivewire extends Component
{
    public $BigWatch = '/images/big-watch.png';   // renamed file (no spaces)
    public $mediumWatch = '/images/medium-watch.png';
    public $smallWatch = '/images/small-watch.png';

    public bool $openPopUp = false;

    public $first_name;
    public $last_name;
    public $email;
    public $success;

    /**
     * Open the popup modal
     */
    // public function openPopUp(): void
    // {
    //     $this->openPopUp = true;
    // }

    // /**
    //  * Close the popup modal
    //  */
    // public function closePopUp(): void
    // {
    //     $this->openPopUp = false;
    // }

    public function setOpenPopUp($openPop)
    {
        $this->openPopUp = $openPop;
    }

    /**
     * Optional: allow triggering from JS with Livewire.dispatch('openPopup')
     */
    #[On('openPopup')]
    public function openPopupFromEvent(): void
    {
        $this->openPopUp = true;
    }

    /**
     * Subscribe form submission
     */
    public function subscribe()
    {
        $validated = $this->validate([
            'first_name' => "required|string|min:3",   
            'last_name'  => "required|string",   
            'email'      => "required|string|email",   
        ]);

        // Send welcome email
        $userInfo = [
            'first_name' => $this->first_name,
            'subject'    => 'Welcome Email Automation',
        ];

        Notification::route('mail', $this->email)->notify(new SubscribeUser($userInfo));

        // Save to database
        Subscriber::create($validated);

        // Show success message
        $this->success = 'Thanks for subscribing to us!';

        // Reset form fields
        $this->first_name = '';
        $this->last_name  = '';
        $this->email      = '';
    }

    public function render()
    {
        return view('livewire.product-livewire');
    }
}
