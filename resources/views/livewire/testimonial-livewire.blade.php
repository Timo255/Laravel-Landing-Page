<div>
    <div class="wrapper">
        <h1 class="test-h1">Customer Reviews</h1>
        <div class="test-content">
          <div id="tC" class="test-boxes">
            @foreach ($testimonials as $ts)
               <div class="test-box">
                <div class="test-star">
                  <img src="{{ asset($ts['star']) }}" alt="" />
                  <img src="{{asset($ts['star'])}}" alt="" />
                  <img src="{{asset($ts['star'])}}" alt="" />
                  <img src="{{asset($ts['star'])}}" alt="" />
                </div>
                <div class="testUser-name">
                  <img src={{$ts['img']}} alt="" />
                  <h1 class="test-name">{{$ts['name']}}</h1>
                </div>
                <div class="test-disc">
                  {{$ts['desc']}}
                </div>
              </div>  
            @endforeach
          </div>
          <div class="offerBtn">
              <h1 class="offer-h1">Get 30% Off. Limited Time Offer</h1>
              <button 
              class="bottomOffer"
              wire:click="setPopUp(true)"
              {{-- onClick={()=>setOpenPopUp(!openPopUp)} --}}
              >Claim Deal Now</button>
            </div>
        </div>
      </div>
</div>
