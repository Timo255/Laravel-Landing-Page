<div>
    <div class="wrapper">
        <div id="dI" class="Detail-imd">
            <div class="productDetails">
                <h1 class="product-header">Smart Digital Watch With 30% Off</h1>
                <p class="disc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptates rerum autem nesciunt aliquam iure, tempore exercitationem repellendus
                    dolorem error reiciendis ut cum optio illum doloribus culpa.</p>
                <button class="topOffer" id="topOffer-btn" wire:click="setOpenPopUp(true)">Claim Deal
                    Now</button>
            </div>
            <div class="product-image">
                <div class="product-image">
                    <img srcset="
                        {{ $BigWatch }} 333w, 
                        {{ $mediumWatch }} 254w, 
                        {{ $smallWatch }} 206w"
                        sizes="(min-width: 1200px) 333px, 
                               (min-width: 768px) 254px, 
                               (min-width: 360px) 206px"
                        src="{{ asset($BigWatch) }}" />
                </div>

            </div>
        </div>

        <!-- Popup section -->
        <div class='popup {{ $openPopUp ? 'active' : '' }}'>
            <div class="popup-close-btn" wire:click="setOpenPopUp(false)">
                <img src="images/close-btn1.png" alt="" />
            </div>
            <h1 class="popH1">Subscribe and check your Email</h1>
            {{-- onSubmit={handleSubmit}  --}}
            <form class="formFields" wire:submit.prevent="subscribe" method="post">
                @csrf
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <div style="text-align: center; color: red;">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                {{-- {firstNameError && <InlineError error={firstNameError}/>} --}}
                <input type="text" placeholder="Enter First Name *" wire:model="first_name" {{-- onChange={(e)=>setFirstName(e.target.value)} --}}
                    required />
                {{-- {lastNameError && <InlineError error={lastNameError}/>} --}}
                <input type="text" placeholder="Enter Last Name *" wire:model="last_name" {{-- onChange={(e)=>setLastName(e.target.value)} --}}
                    required />
                {{-- {emailError && <InlineError error={emailError}/>} --}}
                <input type="email" placeholder="Enter Your Email *" wire:model="email" {{-- onChange={(e)=>setEmail(e.target.value)} --}}
                    required />
                {{-- {statusM.msg ? <p style={{color: `${statusM.success === false ? "red" : "green"}`, marginBottom: "10px"}}>{statusM.msg}</p> : <></>} --}}
                <p style="color: green">{{ $success }}</p>

                <button type="submit" wire:loading.attr="disabled">
                    <span wire:loading.remove>Subscribe</span>
                    <span wire:loading>Subscribing...</span>
                </button>

            </form>
        </div>
    </div>
</div>
