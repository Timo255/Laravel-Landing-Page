<div>
     <div class="wrapper-header">
            <div class="logo"><h2 class="logo-h2">Smart<br/>Watch</h2></div>
            {{-- {{  $activeLink }} --}}
            <div class="navItems {{ $menuOpen ? "show" : " " }}">
                <img src="images/close.png" id="closeBtn" alt="" wire:click="setMenuOpen(false)"/>
                <a 
                href="#dI" 
                wire:click = "setActiveLink('Product')"
                class="navItem {{ $activeLink === "Product" ? "active" : " " }}"
                >Product</a>
                <a 
                href="#product-features" 
                wire:click = "setActiveLink('Features')"
                class="navItem {{ $activeLink === "Features" ? "active" : " " }}"
                >Features</a>
                <a 
                href="#About" 
                wire:click = "setActiveLink('About')"
                class="navItem {{ $activeLink === "About" ? "active" : " " }}"
                >About</a>
                <a 
                href="#tC" 
                wire:click = "setActiveLink('Testimonials')"
                class="navItem {{ $activeLink === "Testimonials" ? "active" : " " }}"
                >Testimonials</a>
            </div>
            <div id="menuBar" wire:click="setMenuOpen(true)">
                <img src="images/menu.png" alt="" />
            </div>
        </div>
</div>
