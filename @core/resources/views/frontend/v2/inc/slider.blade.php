@if(isset($sliders) && !empty($sliders))
    <section class="slider-section">
        <div class="slider-home">
            @foreach($sliders as $key => $data)
                    <?php
                    $image = get_attachment_image_by_id($data->image, 'full');
                    $url = Arr::get($image, 'img_url', '');
                    ?>
                @if($url)
                    <a href="{{Arr::get($data,'btn_01_url', '#')}}">
                        <div class="hero-pattern bg_cover">
                            <img src="{{$url}}" class="w-100"/>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </section>

@endif
