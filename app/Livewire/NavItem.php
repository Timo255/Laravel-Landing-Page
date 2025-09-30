<?php

namespace App\Livewire;

use Livewire\Component;

class NavItem extends Component
{
    public $menuOpen;
    public $activeLink;
    // setMenuOpen(false) & setActiveLink("Product")
    // {`navItem ${activeLink === "Product" ? "active" : ""}`}

    public function mount()
    {
        $this->menuOpen = false;
        $this->activeLink = 'Product';
    }

    public function setMenuOpen($bool)
    {
        $this->menuOpen = $bool;
    }

    public function setActiveLink($navLink)
    {
        $this->activeLink = $navLink;
        $this->menuOpen = false;
    }

    public function render()
    {
        return view('livewire.nav-item');
    }
}
