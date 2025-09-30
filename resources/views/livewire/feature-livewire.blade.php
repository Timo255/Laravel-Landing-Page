<div>
    <div class="wrapper">
        <div class="features-content">
            <div class="h1-disc">
                <h1 class="feature-h1">Product Features</h1>
                <p class="feature-disc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                    alias ut incidunt illo laboriosam.
                </p>
            </div>
            <div class="features">
                @foreach ($features as $ft)
                    <div class="feature">
                        <div class="feature-img">
                            <img src="{{ asset( $ft['img']) }}" alt="{{ $ft['nameH1'] }}" />
                        </div>
                        <div class="feature-disc">
                            <p class="feature-disc-h1">{{$ft['nameH1']}}</p>
                            <p class="feature-disc-text">{{$ft['txt1']}}</p>
                            <p class="feature-disc-text">{{$ft['txt2']}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
