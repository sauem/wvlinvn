@if(isset($sliders) && !empty($sliders))
    <section class="slider-section">
        <div class="slider-home">
            @foreach($sliders as $key => $data)
                <a href="{{Arr::get($data,'btn_01_url', '#')}}">
                    <div class="hero-pattern bg_cover">
                        <img src="{{_IMG($data->image)}}" class="w-100"/>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

@endif
