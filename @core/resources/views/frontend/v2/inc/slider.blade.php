@if(isset($sliders) && !empty($sliders))
    <section class="slider-section">
        <div class="slider-home">
            @foreach($sliders as $key => $data)
                <div class="hero-pattern bg_cover m-0 ">
                    <a class="w-100" href="{{Arr::get($data,'btn_01_url', '#')}}">
                        <img src="{{_IMG($data->image)}}" class="w-100"/>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

@endif
