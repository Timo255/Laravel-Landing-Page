<div>
    <div class="wrapper">
        <div class="about-content">
            <div class="about-img">
                <img srcset="
                        {{ $BigWatch }} 333w, 
                        {{ $mediumWatch }} 254w, 
                        {{ $smallWatch }} 206w"
                    sizes="(min-width: 1200px) 333px, 
                               (min-width: 768px) 254px, 
                               (min-width: 360px) 206px"
                    src="{{ asset($BigWatch) }}" />
            </div>
            <div class="about-disc">
                <h1 class="about-h1">About The Product</h1>
                <p class="abDisc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Temporibus molestiae dolorem at quos quo?
                </p>
                <div class="checkDisc">
                    <img src={{ $checkTick }} alt="" />
                    <p class="checkText">Model No #240 Blackmart</p>
                </div>
                <div class="checkDisc">
                    <img src={{ $checkTick }} alt="" />
                    <p class="checkText">Camera Resulation 24 Mega Pixel</p>
                </div>
                <div class="checkDisc">
                    <img src={{ $checkTick }} alt="" />
                    <p class="checkText">Image Processor DIGIC 7</p>
                </div>
                <div class="checkDisc">
                    <img src={{ $checkTick }} alt="" />
                    <p class="checkText">Effective Pixels Approx, 24,20 megapixels</p>
                </div>
                <div class="checkDisc">
                    <img src={{ $checkTick }} alt="" />
                    <p class="checkText">Aspect Ratio 3:2</p>
                </div>
                <div class="checkDisc">
                    <img src={{ $checkTick }} alt="" />
                    <p class="checkText">Lens Mount EF/EF-5</p>
                </div>
                <div class="checkDisc">
                    <img src={{ $checkTick }} alt="" />
                    <p class="checkText">Focal Length Equlvalent</p>
                </div>
            </div>
        </div>
    </div>
</div>
